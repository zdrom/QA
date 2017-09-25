<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;
use App\Campaign;
use App\Creative;

class UploadController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{	
		$campaigns = Campaign::latest()->get();

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

		return redirect ('/campaign/' . Campaign::latest()->first()->id);
	}

	public function show(Campaign $campaign)
	{
		$uniqueCreativeList = Creative::where('campaign_id', $campaign->id)->get()->unique('creative_name')->toArray();
		//The export contains multiple rows of the same creative depending on how many tracking tags are appened
		//This finds the unique list of creatives

		$creatives = [];

		foreach ($uniqueCreativeList as $uniqueCreative) {
			array_push($creatives, ['creativeName' => $uniqueCreative['creative_name'],'sizeCheck' => $uniqueCreative['check_size'], 'placementIDCheck' => $uniqueCreative['check_placement_id'],'macroCheck' => $uniqueCreative['check_click_macro'],'trackingTags' => Creative::select('tracking_tag')->where('creative_name', $uniqueCreative['creative_name'])->get()->toArray()]); 
		}

		return view('campaign.index', compact('campaign', 'creatives'));
	}

}