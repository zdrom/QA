<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Strategy;

class StrategyController extends Controller
{
    public function show(Strategy $strategy)
    {
    	return view('strategy.index', compact('strategy'));
    }
}
