<?php

namespace App\Http\Controllers;

//use App\Protos\Bookmark_Trip;
//use App\Protos\BookmarkTrip;
//use App\Protos\Bookmark; // Use the generated Bookmark class
use App\Protos\Trip\V4\Activity;
use App\Protos\Trip\V4\Bookmark;
use Google\Cloud\Storage\StorageClient;

// Ensure this path is correct based on your generated files

class ProtoController extends Controller
{
    public function decodeBookmarkold()
    {

        $filePath = storage_path('default_bookmarks.v4_00iw6cRcTfYwM9C2krDSYZnf9PK2.pb'); // Replace with your actual file name

        // Check if the file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        // Read the binary contents of the .pb file
        $binaryData = file_get_contents($filePath);

        // Create a new instance of the Bookmark Protobuf message
        $bookmark = new Bookmark();

        try {
            // Decode the binary data into the Bookmark object
            $bookmark->mergeFromString($binaryData);

            // Convert the decoded Protobuf message to an array for JSON response
            $decodedData = json_decode($bookmark->serializeToJsonString(), true);

            return response()->json(['status' => 'success', 'data' => $decodedData]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function decodeBookmark()
    {
        $userId = '00iw6cRcTfYwM9C2krDSYZnf9PK2';
        // Define the file name using the user ID
//        $fileName = "default_bookmarks.v4_{$userId}.pb";
        $fileName = "default/bookmarks.v4/{$userId}.pb";  // full path within the bucket

        $bucketName = 'global-us-v2-wonderplan-ai'; // Replace with your actual GCS bucket name
        // Initialize the Google Cloud Storage client
        $storage = new StorageClient([
            'keyFilePath' => storage_path('wonderplan-google-cloud-storage-4daca6315c48.json') // Path to your GCS service account JSON file
        ]);

        // Get the GCS bucket
        $bucket = $storage->bucket($bucketName);
        // Check if the file exists in the GCS bucket
        $object = $bucket->object($fileName);
        if (!$object->exists()) {
            return response()->json(['error' => 'File not found on Google Cloud Storage'], 404);
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

            return response()->json(['status' => 'success', 'data' => $decodedData]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
