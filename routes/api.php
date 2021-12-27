<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/l2', 'App\Http\Controllers\LevelOrderBookController@l2OrderBook');

Route::get('/l3', 'App\Http\Controllers\LevelOrderBookController@l3OrderBook');

Route::get('/tickers', 'App\Http\Controllers\TickerController@viewAny');

Route::get('/symbols', 'App\Http\Controllers\SymbolController@viewAny');

Route::get('/trading/fees', 'App\Http\Controllers\TradingController@fees');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
