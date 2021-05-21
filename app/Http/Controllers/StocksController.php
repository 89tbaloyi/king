<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    $stock =  Stock::all(); 
    return view('stock', compact($Stocks, 'stock'));

}
