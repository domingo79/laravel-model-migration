<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('travels.index', compact('travels'));
        // ddd(Travel::all());
    }
}
// Anche a me faceva cosi, per risolvere ho scritto questo nel modello  protected $table = 'travels'; visto che mi diceva che non trovava la tabella travel
