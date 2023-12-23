<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'MoveMoveIo\\DaData\\' => array($vendorDir . '/movemoveapp/laravel-dadata/src'),
    'Modules\\Dadata\\Tests\\' => array($baseDir . '/tests'),
    'Modules\\Dadata\\Database\\Seeders\\' => array($baseDir . '/database/seeders'),
    'Modules\\Dadata\\Database\\Factories\\' => array($baseDir . '/database/factories'),
    'Modules\\Dadata\\App\\' => array($baseDir . '/app'),
    'Modules\\Dadata\\' => array($baseDir . '/'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
);
