<?php


use App\Http\Controllers\BlockInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiningNetworkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';



Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::get('/blocks', BlockInfoController::class);
    Route::get('/mining', MiningNetworkController::class);
    Route::resource('users', UserController::class);
});

Route::get('/test', function () {
//    $difficulty = Cache::store('redis')->put('difficulty', \Illuminate\Support\Facades\Http::acceptJson()->get('https://blockchain.info/q/getdifficulty'), 1200);
//    $difficulty = \Illuminate\Support\Facades\Redis::set('difficulty', \Illuminate\Support\Facades\Http::acceptJson()->get('https://blockchain.info/q/getdifficulty'));
//    dd(\Illuminate\Support\Facades\Redis::get('difficulty'));
//    dd($difficulty);
    Cache::put('difficulty', \Illuminate\Support\Facades\Http::acceptJson()->get('https://blockchain.info/q/getdifficulty'), 120);
    dd(cache()->pull('difficulty'));
});
