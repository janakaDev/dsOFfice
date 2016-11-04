<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    protected $primaryKey = 'number';

    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

    public function advanceRecords()
    {
    	return $this->hasMany('App\AdvanceRecord','advance_number');
    }
}
