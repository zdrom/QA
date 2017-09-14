<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignProperty extends Model
{
	protected $guarded = []; 

	static function nameToID($campaignName) //returns an ID when given a line item name
	{
		$campaign = CampaignProperty::where('campaign_name', $campaignName)->latest()->first();

		return $campaign->id;
	}

	public function user()
	{
		return $this->belongsTO(User::class);
	}

   	public function lineItems()
	{
		return $this->hasMany(lineItem::class);
	}
}
