<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Trip;
use App\Protos\Trip\V4\Bookmark;
use Google\Cloud\Storage\StorageClient;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Factory;

class SaveFirebaseTrips extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase:save-trips';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch trips from Firebase users and save them to the database';

    protected $auth;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();

        // Initialize Firebase Auth
        $firebaseCredentialsPath = storage_path(env('FIREBASE_CREDENTIALS', 'wonderplan-google-cloud-storage-4daca6315c48.json'));

        $factory = (new Factory)
            ->withServiceAccount($firebaseCredentialsPath)
            ->withProjectId(env('FIREBASE_PROJECT_ID'));

        $this->auth = $factory->createAuth();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $bucketName = 'global-us-v2-wonderplan-ai';
        $storage = new StorageClient([
            'keyFilePath' => storage_path('wonderplan-google-cloud-storage-4daca6315c48.json'),
        ]);
        $bucket = $storage->bucket($bucketName);

        try {
            $userQuery = FirebaseAuth\UserQuery::all()->withOffset(0)->withLimit(1000);
            $users = $this->auth->queryUsers($userQuery);

            foreach ($users as $user) {
                $uid = $user->uid;
                $fileName = "default/bookmarks.v4/{$uid}.pb";

                $object = $bucket->object($fileName);
                if (!$object->exists()) {
                    $this->info("No trips found for user {$uid}");
                    continue;
                }

                $binaryData = $object->downloadAsString();
                $bookmark = new Bookmark();

                try {
                    $bookmark->mergeFromString($binaryData);
                    $decodedData = json_decode($bookmark->serializeToJsonString(), true);


                    foreach ($decodedData['trips'] as $trip) {

                        $existingTrip = Trip::where('trip_id', $trip['tripId'])->first();

                        // Skip if the trip already exists
                        if ($existingTrip) {
                            $this->info("Trip {$trip['tripId']} already exists. Skipping...");
                            continue;
                        }

                        Trip::updateOrCreate(
                            ['trip_id' => $trip['tripId']],
                            [
                                'firebase_user_id' => $uid,
                                'title' => $trip['planRequest']['title'] ?? null,
                                'img_url' => $trip['imgUrl'] ?? null,
                                'travel_date' => isset($trip['planRequest']['travelAt'])
                                    ? date('Y-m-d', strtotime($trip['planRequest']['travelAt']))
                                    : null,
                                'days' => $trip['planRequest']['days'] ?? null,
                                'budget_type' => $trip['planRequest']['budgetType'] ?? null,
                                'group_type' => $trip['planRequest']['groupType'] ?? null,
//                                'destination_meta' => json_encode($trip['destinationMeta'] ?? []),
//                                'plan_request' => json_encode($trip['planRequest'] ?? []),
                                'destination_meta' => $trip['destinationMeta'] ?? [],
                                'plan_request' => $trip['planRequest'] ?? [],
                            ]
                        );
                    }

                    $this->info("Trips saved for user {$uid}");

                } catch (\Exception $e) {
                    $this->error("Failed to process trips for user {$uid}: {$e->getMessage()}");
                }
            }

            $this->info('All trips have been processed.');
        } catch (\Exception $e) {
            $this->error("Error fetching Firebase users: {$e->getMessage()}");
        }
    }
}
