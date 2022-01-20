<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlockInfoController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $response = Http::acceptJson()->get('https://api.blockchain.info/charts/avg-block-size?timespan=5weeks&rollingAverage=8hours&format=json');

        $responseForNTransactions = Http::acceptJson()->get('https://api.blockchain.info/charts/n-transactions-per-block?timespan=5weeks&rollingAverage=8hours&format=json');

        $responseForConfirmationTime = Http::acceptJson()->get('https://api.blockchain.info/charts/median-confirmation-time?timespan=5weeks&rollingAverage=8hours&format=json');

        $medianConfirmationTime = json_encode($responseForConfirmationTime['values']);

        $avgBlockSize = json_encode($response['values']);

        $nOfTransactions = json_encode($responseForNTransactions['values']);

        $difficulty = Http::acceptJson()->get('https://blockchain.info/q/getdifficulty');
        $blockcount = Http::acceptJson()->get('https://blockchain.info/q/getblockcount');
        $latesthash = Http::acceptJson()->get('https://blockchain.info/q/latesthash');
        $bcperblock = Http::acceptJson()->get('https://blockchain.info/q/bcperblock');
        $totalbc = Http::acceptJson()->get('https://blockchain.info/q/totalbc');
        $probability = Http::acceptJson()->get('https://blockchain.info/q/probability');
        $hashestowin = Http::acceptJson()->get('https://blockchain.info/q/hashestowin');
        $nexttretarget = Http::acceptJson()->get('https://blockchain.info/q/nextretarget');
        $avgtxsize = Http::acceptJson()->get('https://blockchain.info/q/avgtxsize');
        $avgtxvalue = Http::acceptJson()->get('https://blockchain.info/q/avgtxvalue');
        $interval = Http::acceptJson()->get('https://blockchain.info/q/interval');
        $eta = Http::acceptJson()->get('https://blockchain.info/q/eta');
        $avgtxnumber = Http::acceptJson()->get('https://blockchain.info/q/avgtxnumber');

        return view('blocks', compact('medianConfirmationTime','avgBlockSize', 'nOfTransactions', 'avgtxnumber', 'eta', 'interval', 'avgtxvalue', 'avgtxsize', 'nexttretarget', 'hashestowin', 'probability', 'totalbc', 'bcperblock', 'latesthash', 'blockcount', 'difficulty'));
    }
}
