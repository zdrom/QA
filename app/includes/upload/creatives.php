<?php

use App\Creative;
use App\Campaign;

$sheet->each(function($row) {

	Creative::create([

		'campaign_id' => Campaign::nameToID($GLOBALS['campaignName']),
		'associated_line_items' => $row->associated_lineitems,
		'creative_name' => $row->creative_name,
		'ad_format' => $row->ad_format,
		'dimensions' => $row->dimensions,
		'click_through_url' => $row->clickthrough_url,
		'landing_page_url' => $row->landing_page_url,
		'start_date' => $row->start_date,
		'end_date' => $row->end_date,
		'markup_source' => $row->markup_source,
		'html_js_ad_tag' => $row->html_js_ad_tag,
		'preview_url' => $row->preview_url,
		'creative_template' => $row->creative_template,
		'unique_creative_id' => $row->unique_creative_id,
		// '3p_ad_id' => $row->'3p_ad_id';
		'barometric_placement_id' => $row->barometric_placement_id,
		'tracking_tag' =>$row->tracking_tag
		]);

});