<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
	protected $guarded = []; 

	static function nameToID($LineItemName) //returns an ID when given a line item name
	{
		$lineItem = LineItem::where('LineItemname', $LineItemName)->first();

		return $lineItem->id;
	}

	public function campaign()
	{
		return $this->belongsTo(CampaignProperty::class);
	}

	public function strategies()
	{
		return $this->hasMany(Strategy::class);
	}

}
