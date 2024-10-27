<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Google\Protobuf\Internal\Message; // Assuming you have a .proto file compiled to PHP classes
use Google\Cloud\Storage\StorageClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class FileController extends Controller
{

    /**
     * Fetch a private file from Google Cloud Storage using the Google Cloud SDK.
     */
    public function getFileFromGcsDirect()
    {
        try {
            // Step 1: Create a new Google Cloud Storage client with your project details and key file
            $storage = new StorageClient([
                'projectId' => 'wonderplan', // Your Google Cloud Project ID
                'keyFilePath' => '/Users/shubham/Downloads/wonderplan-91bc1096e0ee.json', // Path to the service account JSON file
            ]);

            // Step 2: Get the Google Cloud Storage bucket
            $bucket = $storage->bucket('global-us-v2-wonderplan-ai'); // Your bucket name

            // Step 3: Define the file path within your bucket
            $filePath = 'trips/v4-1728996604924-70038/trip.pb'; // File path in the bucket

            // Step 4: Get the object (file) from the bucket
            $object = $bucket->object($filePath);

            // Step 5: Check if the file exists in the bucket
            if (!$object->exists()) {
                return response()->json(['error' => 'File not found'], 404);
            }

            // Step 6: Read the file content from Google Cloud Storage
            $fileContent = $object->downloadAsString();

            // Step 7: Optionally save the file locally (as per your original code)
            file_put_contents(storage_path('app/trip.pb'), $fileContent);

            // Step 8: Return the file content or any other response
            return response()->json([
                'message' => 'File retrieved successfully',
                'content' => $fileContent
            ]);

        } catch (\Exception $e) {
            // Handle any errors that occur while fetching the file
            Log::error('Error fetching file from Google Cloud Storage', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to retrieve file: ' . $e->getMessage()], 500);
        }
    }


    /**
     * Fetch and read a .pb file from Google Cloud Storage.
     */
    public function readPbFile()
    {
        // Create a new Google Cloud Storage client
        $storage = new StorageClient([
            'projectId' => 'wonderplan',
            'keyFilePath' => '/Users/shubham/Downloads/wonderplan-91bc1096e0ee.json', // Path to the service account JSON file
        ]);

        // Get the Google Cloud Storage bucket
        $bucket = $storage->bucket('global-us-v2-wonderplan-ai');

        // The file path in Google Cloud Storage
//        $filePath = 'default/bookmarks.v4/00iw6cRcTfYwM9C2krDSYZnf9PK2.pb';
        $filePath = 'trips/v4-1728996604924-70038/trip.pb';

        // Get the object (file) from the bucket
        $object = $bucket->object($filePath);
//        dd($object);
        // Check if the file exists
        if (!$object->exists()) {
            return response()->json(['error' => 'File not found'], 404);
        }


        // Read the contents of the file
        $fileContent = $object->downloadAsString();
        dump($object);
        dump($fileContent);
        die;

        // Log the content for debugging (or process the .pb file content)
        Log::info($fileContent);

        // Return the file content (or process the .pb file)
        return response($fileContent);
    }


    /**
     * Fetch and read a .pb file from Google Cloud Storage.
     */
    public function readPbFile2()
    {
        // File path in Google Cloud Storage
        $filePath = '00iw6cRcTfYwM9C2krDSYZnf9PK2.pb';

        // Retrieve the .pb file from Google Cloud Storage
        $fileContent = Storage::disk('gcs')->get($filePath);

        // Decode Protocol Buffers data (assuming you have a PHP class for your .proto file)
        $bookmark = new \App\Protobuf\Bookmark(); // Replace with your generated class from .proto

        // Parse the .pb file content into the bookmark object
        $bookmark->mergeFromString($fileContent);

        // For now, return the parsed data as a JSON response (you can modify this)
        return response()->json($bookmark->toArray());
    }
}
