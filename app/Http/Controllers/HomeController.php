<?php

namespace App\Http\Controllers;

use App\Models\Level2OrderBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.info/charts/n-transactions?timespan=8weeks&rollingAverage=8hours&format=json');

        $nOfTransactions = json_encode($response['values']);

        return view('dashboard', compact( 'nOfTransactions'));

    }

}
