<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/diff', 'App\Http\Controllers\HomeController@index');

Route::get('/l2', 'App\Http\Controllers\LevelOrderBookController@l2OrderBook');

Route::get('/l3', 'App\Http\Controllers\LevelOrderBookController@l3OrderBook');

Route::apiResource('tickers', 'App\Http\Controllers\TickerController')->only(['index', 'show']);

Route::apiResource('symbols', 'App\Http\Controllers\SymbolController')->only(['index', 'show']);

Route::get('/trading/fees', 'App\Http\Controllers\TradingController@fees');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
