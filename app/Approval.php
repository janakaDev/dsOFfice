<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $primaryKey = 'number';

    public function advance()
    {
    	return $this->belongsTo('App\Advance','advance_number');
    }

	public function officer() #the officer who approved this advance
    {
    	return $this->belongsTo('App\Employee','officer_employee_id');
    }    
}
