<?php

namespace App\Http\Controllers;

use App\Models\Symbol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SymbolController extends Controller
{

    public function viewAny()
    {
        $response = Http::acceptJson()->get('https://api.blockchain.com/v3/exchange/symbols');

        $response->failed();

        Symbol::create([
            'symbol' => $response
        ]);

        return $response;
    }

}
