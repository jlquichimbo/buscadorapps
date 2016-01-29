<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
      | default location for this type of information, allowing packages
      | to have a conventional place to find your various credentials.
      |
     */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],
    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],
    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],
    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '218629750507-arenfb8ud375tl25kb4jlhje57bfrkfq.apps.googleusercontent.com',
        'client_secret' => 'SRfW3U9-KhzMDrVtUGHkiWTf',
        'redirect' => 'http://localhost:8080/busqueda',
    ],
    'facebook' => [
        'client_id' => '974040322673809',
        'client_secret' => 'c48116a75d0e9b4307b24a9677fd493e',
        'redirect' => 'http://localhost:8080/busqueda',
    ],
];
