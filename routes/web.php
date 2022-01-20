<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', 'App\Http\Controllers\HomeController@index')
        ->name('dashboard');

    Route::get('/blocks', 'App\Http\Controllers\BlockInfoController');
    Route::get('/mining', 'App\Http\Controllers\MiningNetworkController');
});


Route::get('/welcome', function () {
    $response = Http::acceptJson()->get('https://api.blockchain.info/charts/mempool-count?timespan=3weeks&rollingAverage=8hours&format=json');

    $nOfTransactions = json_encode($response['values']);

    return view('welcome', compact('nOfTransactions'));
});

require __DIR__ . '/auth.php';
