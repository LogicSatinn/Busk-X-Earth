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
        $response = Http::pool(fn (Pool $pool) => [
            $pool->as('avg-block-size')->acceptJson()->get('https://api.blockchain.info/charts/avg-block-size?timespan=5weeks&rollingAverage=8hours&format=json'),
            $pool->as('n-transactions')->acceptJson()->get('https://api.blockchain.info/charts/n-transactions-per-block?timespan=5weeks&rollingAverage=8hours&format=json'),
            $pool->as('median-confirmation-time')->acceptJson()->get('https://api.blockchain.info/charts/median-confirmation-time?timespan=5weeks&rollingAverage=8hours&format=json'),
            $pool->as('difficulty')->acceptJson()->get('https://blockchain.info/q/getdifficulty'),
            $pool->as('block-count')->acceptJson()->get('https://blockchain.info/q/getblockcount'),
            $pool->as('latest-hash')->acceptJson()->get('https://blockchain.info/q/latesthash'),
            $pool->as('bcper-block')->acceptJson()->get('https://blockchain.info/q/bcperblock'),
            $pool->as('total-bc')->acceptJson()->get('https://blockchain.info/q/totalbc'),
            $pool->as('probability')->acceptJson()->get('https://blockchain.info/q/probability'),
            $pool->as('hashes-to-win')->acceptJson()->get('https://blockchain.info/q/hashestowin'),
            $pool->as('next-retarget')->acceptJson()->get('https://blockchain.info/q/nextretarget'),
            $pool->as('avg-tx-size')->acceptJson()->get('https://blockchain.info/q/avgtxsize'),
            $pool->as('avg-tx-value')->acceptJson()->get('https://blockchain.info/q/avgtxvalue'),
            $pool->as('interval')->acceptJson()->get('https://blockchain.info/q/interval'),
            $pool->as('eta')->acceptJson()->get('https://blockchain.info/q/eta'),
            $pool->as('avg-tx-number')->acceptJson()->get('https://blockchain.info/q/avgtxnumber'),
        ]);


        return view('blocks', [
            'difficulty' => $response['difficulty'],
            'blockCount' => $response['block-count'],
            'latestHash' => $response['latest-hash'],
            'bcperBlock' => $response['bcper-block'],
            'totalBc' => $response['total-bc'],
            'probability' => $response['probability'],
            'hashesToWin' => $response['hashes-to-win'],
            'nextRetarget' => $response['next-retarget'],
            'avgTxSize' => $response['avg-tx-size'],
            'avgTxValue' => $response['avg-tx-value'],
            'interval' => $response['interval'],
            'eta' => $response['eta'],
            'avgTxNumber' => $response['avg-tx-number'],
            'avgBlockSize' => json_encode($response['avg-block-size']['values']),
            'medianConfirmationTime' => json_encode($response['median-confirmation-time']['values']),
            'nOfTransactions' => json_encode($response['n-transactions']['values']),
        ]);
    }
}
