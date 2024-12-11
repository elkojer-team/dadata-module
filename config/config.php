<?php


return [
    'token' => [
        'value' => config('integrations.dadata.token', ''),
        'type' => 'text',
        'required' => true,
        'description' => 'Токен'
    ],
    'secret' => [
        'value' => config('integrations.dadata.secret', ''),
        'type' => 'text',
        'required' => true,
        'description' => 'Секретный ключ'
    ],
    'timeout' => [
        'value' => config('integrations.dadata.timeout', "10"),
        'type' => 'text',
        'required' => false,
        'description' => 'Таймаут'
    ],
];
