<?php
namespace Modules\Dadata\App\Services;

use Dadata\DadataClient;
use Illuminate\Support\Facades\Cache;

class DadataService
{

    protected DadataClient $client;
    public function __construct()
    {
        $this->client = new DadataClient(config('dadata.token.value'), config('dadata.secret.value'));
    }

    /**
     * @throws \Exception
     */
    public function address($query = 'г ', int $count = 10): array
    {
        return Cache::remember($query, 3600, function () use ($query, $count) {
            return [
                'suggestions' => $this->client->suggest('address', $query, $count,
                    [
                    'language' => 'ru',
                        [
                            "from_bound" => [
                                "value" => "region"
                            ],
                            "to_bound" => [
                                "value" => "house"
                            ]
                        ]
                    ],
                )
            ];
        });
    }
}
