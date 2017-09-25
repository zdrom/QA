<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Campaign;
use App\Creative;


class CreativeController extends Controller
{
	public function show(Campaign $campaign)
	{

		return view('/');

	}
}