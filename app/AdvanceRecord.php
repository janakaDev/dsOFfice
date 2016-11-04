<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvanceRecord extends Model
{
    protected $primaryKey = 'number';

    public function advance()
    {
    	return $this->belongsTo('App\Advance','advance_number');
    }  

}
