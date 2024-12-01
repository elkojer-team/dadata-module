<?php


return [
    'token' => [
        'value' => Settings::get('integrations.dadata.token', ''),
        'type' => 'text',
        'required' => true,
        'description' => 'Токен'
    ],
    'secret' => [
        'value' => Settings::get('integrations.dadata.secret', ''),
        'type' => 'text',
        'required' => true,
        'description' => 'Секретный ключ'
    ],
    'timeout' => [
        'value' => Settings::get('integrations.dadata.timeout', "10"),
        'type' => 'text',
        'required' => false,
        'description' => 'Таймаут'
    ],
];
