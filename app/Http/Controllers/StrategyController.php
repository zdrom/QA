<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Campaign;
use App\LineItem;
use App\Strategy;

class StrategyController extends Controller
{
    public function show(Campaign $campaign, LineItem $lineItem, Strategy $strategy)
    {
    	return view('strategy.index', compact('campaign', 'strategy', 'lineItem'));
    }
}
