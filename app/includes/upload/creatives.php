<?php

use App\Creative;
use App\Campaign;

$sheet->each(function($row) {

	Creative::create([

		'campaign_id' => Campaign::nameToID($GLOBALS['campaignName']),
		'associated_line_items' => $row['associated_lineitems'],
		'creative_name' => $row['creative_name'],
		'ad_format' => $row['ad_format'],
		'dimensions' => $row['dimensions'],
		'click_through_url' => $row['clickthrough_url'],
		'landing_page_url' => $row['landing_page_url'],
		'start_date' => $row['start_date'],
		'end_date' => $row['end_date'],
		'markup_source' => $row['markup_source'],
		'html_js_ad_tag' => $row['html_js_ad_tag'],
		'preview_url' => $row['preview_url'],
		'creative_template' => $row['creative_template'],
		'unique_creative_id' => $row['unique_creative_id'],
		'3p_ad_id' => $row['3p_ad_id'],
		'barometric_placement_id' => $row['barometric_placement_id'],
		'tracking_tag' =>$row['tracking_tag'],
		'check_placement_id' => (strpos($row['creative_name'], $row['3p_ad_id']) !== FALSE) ? 1 : 0,
		'check_size' => (mb_stripos($row['creative_name'], str_replace(' ', '', $row['dimensions'])) !== FALSE) ? 1 : 0,
		'check_click_macro' =>($row['markup_source'] == 'Custom Ad Tag') ? (mb_stripos($row['html_js_ad_tag'], '[ENCODEDCLICKURL]') !== FALSE) ? 1 : 0 : NULL

		]);

})->toArray();

//This is an array because of the 3p_ad_id column. Can't access the object property when it starts with a number