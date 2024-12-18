<?php
namespace App\Http\Controllers;

use App\Protos\Trip\V4\Bookmark;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Http\Request;

class UserTripController extends Controller
{
    public function show($uid)
    {
        $bucketName = 'global-us-v2-wonderplan-ai';
        $fileName = "default/bookmarks.v4/{$uid}.pb";

        // Fetch the trip data from Google Cloud Storage
        $storage = new StorageClient([
            'keyFilePath' => storage_path('wonderplan-google-cloud-storage-4daca6315c48.json') // Path to your GCS service account JSON file
        ]);

        // Get the GCS bucket
        $bucket = $storage->bucket($bucketName);
        // Check if the file exists in the GCS bucket
        $object = $bucket->object($fileName);
        if (!$object->exists()) {
//            return redirect()->back()->withErrors('No trips found for this user.');
            return view('admin.trips.index', [
                'trips' => [],
                'uid' => '',
            ]);
        }

        // Read the binary contents of the .pb file from GCS
        $binaryData = $object->downloadAsString();

        // Create a new instance of the Bookmark Protobuf message
        $bookmark = new Bookmark();

        try {
            // Decode the binary data into the Bookmark object
            $bookmark->mergeFromString($binaryData);

            // Convert the decoded Protobuf message to an array for JSON response
            $decodedData = json_decode($bookmark->serializeToJsonString(), true);
            return view('admin.trips.index', [
                'trips' => $decodedData['trips'],
                'uid' => $uid,
            ]);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
