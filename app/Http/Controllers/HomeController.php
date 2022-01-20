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
        $difficulty = Http::acceptJson()->get('https://blockchain.info/q/getdifficulty');
        $blockcount = Http::acceptJson()->get('https://blockchain.info/q/getblockcount');
        $latesthash = Http::acceptJson()->get('https://blockchain.info/q/latesthash');
        $bcperblock = Http::acceptJson()->get('https://blockchain.info/q/bcperblock');
        $totalbc = Http::acceptJson()->get('https://blockchain.info/q/totalbc');
        $probability = Http::acceptJson()->get('https://blockchain.info/q/probability');
        $hashestowin = Http::acceptJson()->get('https://blockchain.info/q/hashestowin');
        $nexttretarget = Http::acceptJson()->get('https://blockchain.info/q/nextretarget');
        $avgtxsize = Http::acceptJson()->get('https://blockchain.info/q/avgtxsize');
        $avgtxvalue = Http::acceptJson()->get('https://blockchain.info/q/avgtxvalue');
        $interval = Http::acceptJson()->get('https://blockchain.info/q/interval');
        $eta = Http::acceptJson()->get('https://blockchain.info/q/eta');
        $avgtxnumber = Http::acceptJson()->get('https://blockchain.info/q/avgtxnumber');


        $unconfirmedTransactions = Http::acceptJson()->get('https://blockchain.info/unconfirmed-transactions?format=json');
        $latestBlock = Http::acceptJson()->get('https://blockchain.info/latestblock');
        $stats = Http::acceptJson()->get('https://api.blockchain.info/stats');


        return view('dashboard', compact('unconfirmedTransactions','latestBlock', 'stats', 'avgtxnumber', 'eta', 'interval', 'avgtxvalue', 'avgtxsize', 'nexttretarget', 'hashestowin', 'probability', 'totalbc', 'bcperblock', 'latesthash', 'blockcount', 'difficulty'));


    }

}
