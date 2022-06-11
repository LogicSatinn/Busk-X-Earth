<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class BlockInfoController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
//        $response = Http::pool(fn (Pool $pool) => [
//            $pool->as('avg-block-size')->acceptJson()->get('https://api.blockchain.info/charts/avg-block-size?timespan=5weeks&rollingAverage=8hours&format=json'),
//            $pool->as('n-transactions')->acceptJson()->get('https://api.blockchain.info/charts/n-transactions-per-block?timespan=5weeks&rollingAverage=8hours&format=json'),
//            $pool->as('median-confirmation-size')->acceptJson()->get('https://api.blockchain.info/charts/median-confirmation-time?timespan=5weeks&rollingAverage=8hours&format=json'),
//            $pool->as('difficulty')->acceptJson()->get('https://blockchain.info/q/getdifficulty'),
//            $pool->as('block-count')->acceptJson()->get('https://blockchain.info/q/getblockcount'),
//            $pool->as('latest-hash')->acceptJson()->get('https://blockchain.info/q/latesthash'),
//            $pool->as('bcper-block')->acceptJson()->get('https://blockchain.info/q/bcperblock'),
//            $pool->as('total-bc')->acceptJson()->get('https://blockchain.info/q/totalbc'),
//            $pool->as('probability')->acceptJson()->get('https://blockchain.info/q/probability'),
//            $pool->as('hashes-to-win')->acceptJson()->get('https://blockchain.info/q/hashestowin'),
//            $pool->as('next-retarget')->acceptJson()->get('https://blockchain.info/q/nextretarget'),
//            $pool->as('avg-tx-size')->acceptJson()->get('https://blockchain.info/q/avgtxsize'),
//            $pool->as('avg-tx-value')->acceptJson()->get('https://blockchain.info/q/avgtxvalue'),
//            $pool->as('interval')->acceptJson()->get('https://blockchain.info/q/interval'),
//            $pool->as('eta')->acceptJson()->get('https://blockchain.info/q/eta'),
//            $pool->as('avg-tx-number')->acceptJson()->get('https://blockchain.info/q/avgtxnumber'),
//        ]);


        $this->cacheHttpResponses(key: 'difficulty', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/getdifficulty'));
        $this->cacheHttpResponses(key: 'block-count', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/getblockcount'));
        $this->cacheHttpResponses(key: 'latest-hash', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/latesthash'));
        $this->cacheHttpResponses(key: 'bcper-block', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/bcperblock'));
        $this->cacheHttpResponses(key: 'total-bc', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/totalbc'));
        $this->cacheHttpResponses(key: 'probability', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/probability'));
        $this->cacheHttpResponses(key: 'hashes-to-win', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/hashestowin'));
        $this->cacheHttpResponses(key: 'next-retarget', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/nextretarget'));
        $this->cacheHttpResponses(key: 'avg-tx-size', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/avgtxsize'));
        $this->cacheHttpResponses(key: 'avg-tx-value', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/avgtxvalue'));
        $this->cacheHttpResponses(key: 'interval', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/interval'));
        $this->cacheHttpResponses(key: 'eta', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/eta'));
        $this->cacheHttpResponses(key: 'avg-tx-number', httpUrl: Http::acceptJson()->get('https://blockchain.info/q/avgtxnumber'));
        $this->cacheJsonHttpResponses(key: 'avg-block-size', httpUrl: Http::acceptJson()->get('https://api.blockchain.info/charts/avg-block-size?timespan=5weeks&rollingAverage=8hours&format=json'));
        $this->cacheJsonHttpResponses(key: 'median-confirmation-time', httpUrl: Http::acceptJson()->get('https://api.blockchain.info/charts/median-confirmation-time?timespan=5weeks&rollingAverage=8hours&format=json'));
        $this->cacheJsonHttpResponses(key: 'n-transactions', httpUrl: Http::acceptJson()->get('https://api.blockchain.info/charts/n-transactions-per-block?timespan=5weeks&rollingAverage=8hours&format=json'));

//        return view('blocks', [
//            'difficulty' =>  Cache::store('redis')->remember('difficulty', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/getdifficulty')),
//            'blockCount' => Cache::store('redis')->remember('block-count', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/getblockcount')),
//            'latestHash' => Cache::store('redis')->remember('latest-hash', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/latesthash')),
//            'bcperBlock' => Cache::store('redis')->remember('bcper-block', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/bcperblock')),
//            'totalBc' => Cache::store('redis')->remember('total-bc', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/totalbc')),
//            'probability' => Cache::store('redis')->remember('probability', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/probability')),
//            'hashesToWin' => Cache::store('redis')->remember('hashes-to-win', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/hashestowin')),
//            'nextRetarget' => Cache::store('redis')->remember('next-retarget', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/nextretarget')),
//            'avgTxSize' => Cache::store('redis')->remember('avg-tx-size', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/avgtxsize')),
//            'avgTxValue' => Cache::store('redis')->remember('avg-tx-value', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/avgtxvalue')),
//            'interval' => Cache::store('redis')->remember('interval', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/interval')),
//            'eta' => Cache::store('redis')->remember('eta', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/eta')),
//            'avgTxNumber' => Cache::store('redis')->remember('avg-tx-number', 1200, fn () => Http::acceptJson()->get('https://blockchain.info/q/avgtxnumber')),
//            'medianConfirmationTime' => Cache::store('redis')->remember('median-confirmation-size', 1200, fn () => json_encode(Http::acceptJson()->get('https://api.blockchain.info/charts/median-confirmation-time?timespan=5weeks&rollingAverage=8hours&format=json')['values'])),
//            'avgBlockSize' => Cache::store('redis')->remember('avg-block-size', 1200, fn () => json_encode(Http::acceptJson()->get('https://api.blockchain.info/charts/avg-block-size?timespan=5weeks&rollingAverage=8hours&format=json')['values'])),
//            'nOfTransactions' => Cache::store('redis')->remember('n-transactions', 1200, fn () => json_encode(Http::acceptJson()->get('https://api.blockchain.info/charts/n-transactions-per-block?timespan=5weeks&rollingAverage=8hours&format=json')['values'])),
//        ]);

        return view('blocks', [
            'difficulty' => $this->pullCacheUsingKey('difficulty'),
            'blockCount' => $this->pullCacheUsingKey('block-count'),
            'latestHash' => $this->pullCacheUsingKey('latest-hash'),
            'bcperBlock' => $this->pullCacheUsingKey('bcper-block'),
            'totalBc' => $this->pullCacheUsingKey('total-bc'),
            'probability' => $this->pullCacheUsingKey('probability'),
            'hashesToWin' => $this->pullCacheUsingKey('hashes-to-win'),
            'nextRetarget' => $this->pullCacheUsingKey('next-retarget'),
            'avgTxSize' => $this->pullCacheUsingKey('avg-tx-size'),
            'avgTxValue' => $this->pullCacheUsingKey('avg-tx-value'),
            'interval' => $this->pullCacheUsingKey('interval'),
            'eta' => $this->pullCacheUsingKey('eta'),
            'avgTxNumber' => $this->pullCacheUsingKey('avg-tx-number'),
            'avgBlockSize' => $this->pullCacheUsingKey('avg-block-size'),
            'medianConfirmationSize' => $this->pullCacheUsingKey('median-confirmation-time'),
            'nOfTransactions' => $this->pullCacheUsingKey('n-transactions')
        ]);
    }


    public function cacheHttpResponses($key, $httpUrl, $seconds = 1200)
    {
        if (! Cache::has($key)) {
            Cache::put($key, $httpUrl, $seconds);
        }
    }


    public function cacheJsonHttpResponses($key, $httpUrl, $seconds = 1200)
    {
        if (! Cache::has($key)) {
            Cache::put($key, json_encode($httpUrl['values']), $seconds);
        }
    }


    public function pullCacheUsingKey($key)
    {
        return Cache::pull($key);
    }
}
