<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.info/charts/n-transactions?timespan=8weeks&rollingAverage=8hours&format=json');

        $nOfTransactions = json_encode($response['values']);

        return view('dashboard', compact( 'nOfTransactions'));

    }

}
