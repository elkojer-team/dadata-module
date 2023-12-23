<?php

return [
    'name' => 'Dadata',
    'services' => [
        'TOKEN' => env('DADATA_TOKEN'),
        'SECRET' => env('DADATA_SECRET'),
        'TIMEOUT' => env('DADATA_TIMEOUT')
    ]
];
