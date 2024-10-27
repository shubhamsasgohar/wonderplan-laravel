<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],
        'gcs' => [
            'driver' => 'gcs',
            'project_id' => 'wonderplan',
//            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'your-project-id'),
//            'key_file' => env('GOOGLE_CLOUD_KEY_FILE', null), // Optional: Path to your service account credentials file
            'key_file' => 'wonderplan-91bc1096e0ee.json', // Optional: Path to your service account credentials file
//            'bucket' => env('GOOGLE_CLOUD_STORAGE_BUCKET', 'your-bucket-name'),
            'bucket' => 'global-us-v2-wonderplan-ai',
            'path_prefix' => 'default/bookmarks.v4', // Optional: prefix/folder within the bucket
//            'path_prefix' => env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX', null), // Optional: prefix/folder within the bucket
            'storage_api_uri' =>null, // Optional: custom storage API URI
//            'storage_api_uri' => env('GOOGLE_CLOUD_STORAGE_API_URI', null), // Optional: custom storage API URI
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
