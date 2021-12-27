<?php

namespace App\Http\Controllers;

use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class TickerController extends Controller
{

    public function viewAny()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/tickers');

        $response->failed();

        Ticker::create([
            'ticker' => $response
        ]);

        return $response;
    }

}
