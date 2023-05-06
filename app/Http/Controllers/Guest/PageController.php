<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //ricerca nel database tutti i treni in partenza con una data compresa tra 15 minuti prima del momento della ricerca e le 24 ore successive
        $trains = Train::where('orario_partenza', '>', \Carbon\Carbon::now()->subMinutes(15))->where('orario_partenza', '<', \Carbon\Carbon::now()->addDays(1))->orderBy('orario_partenza', 'asc')->get();
        //dd($trains);
        return view('home', compact('trains'));
    }
}
