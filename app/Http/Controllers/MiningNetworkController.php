<?php

namespace App\Http\Controllers;

use App\Models\Level2OrderBook;
use App\Models\Level3OrderBook;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class MiningNetworkController extends Controller
{
    public function __invoke()
    {
        $response = Http::pool(fn (Pool $pool) => [
            $pool->as('hash-rate')->acceptJson()->get('https://api.blockchain.info/charts/hash-rate?timespan=52weeks&rollingAverage=8hours&format=json'),
            $pool->as('difficulty')->acceptJson()->get('https://api.blockchain.info/charts/difficulty?timespan=52weeks&rollingAverage=8hours&format=json'),
            $pool->as('miners-revenue')->acceptJson()->get('https://api.blockchain.info/charts/miners-revenue?timespan=8weeks&rollingAverage=8hours&format=json'),
            $pool->as('unique-addresses')->acceptJson()->get('https://api.blockchain.info/charts/n-unique-addresses?timespan=8weeks&rollingAverage=8hours&format=json')
        ]);

        return view('mining', [
            'hashRate' => json_encode($response['hash-rate']['values']),
            'difficulty' => json_encode($response['difficulty']['values']),
            'minersRevenue' => json_encode($response['miners-revenue']['values']),
            'uniqueAddresses' => json_encode($response['unique-addresses']['values'])
        ]);
    }

}
