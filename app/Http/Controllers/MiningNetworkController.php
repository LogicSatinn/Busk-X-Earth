<?php

namespace App\Http\Controllers;

use App\Models\Level2OrderBook;
use App\Models\Level3OrderBook;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class MiningNetworkController extends Controller
{
    public function __invoke()
    {

        $responseForHashRate = Http::acceptJson()->get('https://api.blockchain.info/charts/hash-rate?timespan=52weeks&rollingAverage=8hours&format=json');

        $responseForDifficulty = Http::acceptJson()->get('https://api.blockchain.info/charts/difficulty?timespan=52weeks&rollingAverage=8hours&format=json');

        $responseForMinersRevenue = Http::acceptJson()->get('https://api.blockchain.info/charts/miners-revenue?timespan=8weeks&rollingAverage=8hours&format=json');

        $responseForUniqueAddresses = Http::acceptJson()->get('https://api.blockchain.info/charts/n-unique-addresses?timespan=8weeks&rollingAverage=8hours&format=json');

        $uniqueAddresses = json_encode($responseForUniqueAddresses['values']);

        $minersRevenue = json_encode($responseForMinersRevenue['values']);

        $difficulty = json_encode($responseForDifficulty['values']);

        $hashRate = json_encode($responseForHashRate['values']);

        return view('mining', compact('hashRate', 'difficulty', 'minersRevenue', 'uniqueAddresses'));
    }

}
