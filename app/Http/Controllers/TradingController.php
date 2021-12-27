<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TradingController extends Controller
{
    public function fees()
    {
        $response = Http::withHeaders([
            'X-API-Token' => config('services.blockchain.key')
        ])->acceptJson()->get('https://api.blockchain.com/v3/exchange/fees');

        $response->failed();

        return $response;
    }


//    public function trades()
//    {
//        $response = Http::withHeaders([
//            'X-API-Token' => '1080dd34-637e-4ca6-b248-f47ed078ef04'
//        ])->acceptJson()->get('https://api.blockchain.com/v3/exchange/trades');
//
//        $response->failed();
//
//        return $response;
//    }


//    public function fills()
//    {
//        $response = Http::withHeaders([
//            'X-API-Token' => '1080dd34-637e-4ca6-b248-f47ed078ef04'
//        ])->acceptJson()->get('https://api.blockchain.com/v3/exchange/fills');
//
//        $response->failed();
//
//        return $response;
//    }
}
