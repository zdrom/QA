<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Maatwebsite\Excel\Facades\Excel;

class Upload extends Model
{
    static function saveExport($path){
    	Excel::load('storage/app/' . $path, function($reader) {

            include 'includes/upload/campaigns.php'; //Don't need to loop through the rows 

    		$reader->each(function($sheet) {

    			switch ($sheet->getTitle()) :

    				case 'Line Items':
    					include 'includes/upload/lineItems.php';
    					break;

    				case 'Strategy':
    					include 'includes/upload/strategies.php';
    					break;

    				case 'Creative':

    					include 'includes/upload/creatives.php';
    					break;

    			endswitch;

			});

    	});
    }
}
