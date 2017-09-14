<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    protected $guarded = []; 

    public function lineItem()
    {
    	return $this->belongsTo(LineItem::class);
    }
}
