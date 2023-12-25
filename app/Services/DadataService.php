<?php
/**
 * Created by PhpStorm
 * User: JetBrain <amon_amonov@bk.ru>
 * Date: 24.12.2023
 * Time: 02:35
 */

namespace Modules\Dadata\App\Services;

use Illuminate\Support\Facades\Cache;
use MoveMoveIo\DaData\DaDataAddress;
use MoveMoveIo\DaData\Enums\Language;

class DadataService
{
    private function serviceAddress()
    {
        return new DaDataAddress();
    }

    /**
     * @throws \Exception
     */
    public function address(string $query, int $count = 10): array
    {
        return Cache::rememberForever($query, function () use ($query, $count) {
            return $this->serviceAddress()->prompt($query, $count, Language::RU, from_bound: [
                "value" => 'region'
            ],
                to_bound: [
                    'value' => 'house'
                ]
            );
        });
    }
}
