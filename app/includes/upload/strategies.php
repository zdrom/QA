<?php 

use App\Strategy;
use App\LineItem;

$sheet->each(function($row) {

    Strategy::create([

        'line_item_id' => LineItem::nameToID($row->lineitemname),
        'line_item_name' => $row->lineitemname,
        'name' => $row->name,
        'geography_zip' => $row->geography_zip,
        'geography_mosaics' => $row->geography_mosaics,
        'geography_coordinate' => $row->geography_coordinate,
        'geography_dma' => $row->geography_dma,
        'geography_state' => $row->geography_state,
        'geography_city' => $row->geography_city,
        'device_type' => $row->device_type,
        'content_appsite_type' => $row->content_appsite_type,
        'creatives' => $row->creatives

        ]);

});