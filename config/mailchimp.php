<?php

return [

    /*
    | Mailchimp Marketing API
    | The server prefix is the part after the dash in your API key (e.g. "us21").
    */
    'marketing' => [
        'api_key' => env('MAILCHIMP_API_KEY'),
        'server' => env('MAILCHIMP_SERVER_PREFIX'),
        'list_id' => env('MAILCHIMP_LIST_ID'),
    ],

    /*
    | Mailchimp Transactional (Mandrill) API
    */
    'transactional' => [
        'api_key' => env('MANDRILL_API_KEY'),
    ],

    'timeout' => 30,

];
