<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;
use App\CampaignProperty;

class UploadController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{	
		$campaigns = CampaignProperty::latest()->get();

		return view('upload.campaigns',compact('campaigns'));
	}

	public function create()
	{
		return view ('upload.index');
	}

	public function store()
	{
		$path = request()->file('campaign')->store('campaigns');

		Upload::saveExport($path);

		return redirect ('/campaign/' . CampaignProperty::latest()->first()->id);
	}

	public function show(CampaignProperty $campaign)
	{
		return view('campaign.index', compact('campaign'));
	}

}
