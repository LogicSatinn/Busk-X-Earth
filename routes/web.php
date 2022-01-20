<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', 'App\Http\Controllers\HomeController@index')
        ->name('dashboard');

    Route::get('/l2', 'App\Http\Controllers\LevelOrderBookController@l2OrderBook');
    Route::get('/l3', 'App\Http\Controllers\LevelOrderBookController@l3OrderBook');
});

Route::get('/welcome', function () {
    $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/l2/BTC-USD');

    $response->failed();

    $bids = json_encode($response['bids']);

    return view('welcome', compact('bids'));
});


require __DIR__ . '/auth.php';
