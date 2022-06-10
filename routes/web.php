<?php

use App\Http\Controllers\BlockInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiningNetworkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::get('/blocks', BlockInfoController::class);
    Route::get('/mining', MiningNetworkController::class);
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';
