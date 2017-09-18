<?php

use App\Campaign;

$cp = $reader->getSheetByName('Campaign Properties');

$GLOBALS['campaignName'] = $cp->getCell('B1');

Campaign::create([

	'user_id' => auth()->id(),
	'campaign_name' => $cp->getCell('B1'),
	'start_date' => $cp->getCell('B4'),
	'end_date' => $cp->getCell('B5'),
	'salesforce_id' => $cp->getCell('B6'),
	'barometric_campaign_id' => $cp->getCell('B8')
	
]);