<?php

declare(strict_types=1);
return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * Use the Service Account JSON file to authenticate requests to Firebase.
             */

//            'credentials' => env('FIREBASE_CREDENTIALS', env('GOOGLE_APPLICATION_CREDENTIALS')),
//            'project_id' => env('FIREBASE_PROJECT_ID', 'wonderplan'),  // Add fallback
            'credentials' => [
                'file' => env('FIREBASE_CREDENTIALS'),
            ],
            'project_id' => env('FIREBASE_PROJECT_ID'),

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             *
             * Configuration for Firebase Authentication.
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID', null), // Optional for multi-tenant apps
            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase API,
             * such as Google's public keys used to verify ID tokens.
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL', null),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL', null),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests.
             */

            'http_client_options' => [

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out.
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT', 10),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
