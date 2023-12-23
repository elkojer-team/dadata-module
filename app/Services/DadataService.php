<?php
/**
 * Created by PhpStorm
 * User: JetBrain <amon_amonov@bk.ru>
 * Date: 24.12.2023
 * Time: 02:35
 */

namespace Modules\Dadata\App\Services;
use MoveMoveIo\DaData\DaDataAddress;
class DadataService
{
    public function address (string $query, int $count = 10) {
        return DaDataAddress::prompt($query, count: $count);
    }
}