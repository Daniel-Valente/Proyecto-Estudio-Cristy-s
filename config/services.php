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

    'stripe' => [
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID' , '1a31f8e10a22213fc89c'),
        'client_secret' => env('GITHUB_CLIENT_SECRET', '0cafab9347aa26b9ee67098f823e46544a6d2d64'),
        'redirect' => 'http://proyecto.test:8080/login/github/callback',
    ],

    'twitter' => [
        'client_id' => env('GITHUB_CLIENT_ID' , 'FCyqzX8muSvtQHpR0HvwCtAJY'),
        'client_secret' => env('GITHUB_CLIENT_SECRET', 'AvFdJsnili94Cyw8eOsNRMcJIyz6SI9ISkcKHKBXkNeEcCyuFT'),
        'redirect' => 'http://proyecto.test:8080/login/twitter/callback',
    ],
];
