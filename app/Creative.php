<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    protected $guarded = []; 

    public function campaign()
	{
		return $this->belongsTo(Campaign::class);
	}

	static function checkSize()
	{
		return $this->check_size;
	}

}
