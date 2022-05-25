<?php

return [
    /**
     * Default dictionary API driver
     */
    'default' => env('DICTIONARY_API_DRIVER', 'oxford'),

    'drivers' => [
        'oxford' => [
            'api_base_url' => 'https://od-api.oxforddictionaries.com/api/v2',
            'application_id' => env('OXFORD_APPLICATION_ID'),
            'application_key' => env('OXFORD_APPLICATION_KEY')
        ]
    ]
];
