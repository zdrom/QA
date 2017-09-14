<?php

use App\CampaignProperty;

$cp = $reader->getSheetByName('Campaign Properties');

$GLOBALS['campaignName'] = $cp->getCell('B1');

CampaignProperty::create([

	'user_id' => auth()->id(),
	'campaign_name' => $cp->getCell('B1'),
	'start_date' => $cp->getCell('B3'),
	'end_date' => $cp->getCell('B4'),
	'salesforce_id' => $cp->getCell('B5'),
	'barometric_campaign_id' => $cp->getCell('B7')
	
]);