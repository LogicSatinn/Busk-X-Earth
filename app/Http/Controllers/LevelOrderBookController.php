<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LevelOrderBookController extends Controller
{
    public function l2OrderBook()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/l2/BTC-USD');

        $response->failed();

        return $response;
    }


    public function l3OrderBook()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/l3/BTC-USD');

        $response->failed();

        return $response;
    }
}
