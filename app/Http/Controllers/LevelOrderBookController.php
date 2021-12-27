<?php

namespace App\Http\Controllers;

use App\Models\Level2OrderBook;
use App\Models\Level3OrderBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LevelOrderBookController extends Controller
{
    public function l2OrderBook()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/l2/BTC-USD');

        $response->failed();

        $l2OrderBook = Level2OrderBook::create([
            'l2orderbook' => $response
        ]);

        return $response;
    }


    public function l3OrderBook()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/l3/BTC-USD');

        $response->failed();

        $l3OrderBook = Level3OrderBook::create([
            'l3orderbook' => $response
        ]);

        return $response;
    }
}
