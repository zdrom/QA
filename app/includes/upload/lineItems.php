<?php

use App\lineItem;
use App\Campaign;

$sheet->each(function($row) {

    LineItem::create([

        'campaign_id' => Campaign::nameToID($GLOBALS['campaignName']),
        'line_item_id' => $row->line_item_id,
        'lineitemname' => $row->lineitemname,
        'io_line_item_budget' => $row->io_line_item_budget,
        'io_line_item_impressions' => $row->io_line_item_impressions,
        'io_line_item_clicks' => $row->io_line_item_clicks,
        'io_line_item_completes' => $row->io_line_item_completes,
        'startdate' => $row->startdate,
        'enddate' => $row->enddate,
        'barometric_id' => $row->barometric_id,
        'status' => $row->status

        ]);

});