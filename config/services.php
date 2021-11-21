<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'apiKey'=> 'AIzaSyBDYTJfTi0Ttrea9WYVGyD9dcYeNLDxqao',
        'authDomain'=> 'laravel-firebase-crud-tutorial.firebaseapp.com',
        'databaseURL'=>'https://laravel-firebase-crud-tutorial-default-rtdb.firebaseio.com',
        'projectId'=>'laravel-firebase-crud-tutorial',
        'storageBucket'=> 'laravel-firebase-crud-tutorial.appspot.com',
        'messagingSenderId'=>'748624661045',
        'appId'=> '1:748624661045:web:cd26b5b9caa2ae00c83f7c',
        'measurementId'=>'G-WQEHT8TZC7',
    ],

];
