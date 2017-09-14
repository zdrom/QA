<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\lineItem;

class LineItemController extends Controller
{
    public function show(LineItem $lineItem)
    {
    	return view('lineItem.index', compact('campaign', 'lineItem'));
    }
}
