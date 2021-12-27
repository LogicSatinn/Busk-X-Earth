<?php

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
