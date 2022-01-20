<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', 'App\Http\Controllers\HomeController@index')
        ->name('dashboard');

    Route::get('/blocks', 'App\Http\Controllers\BlockInfoController');
    Route::get('/mining', 'App\Http\Controllers\MiningNetworkController');
});

require __DIR__ . '/auth.php';
