<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryRecord extends Model
{
    protected $primaryKey = 'number';

    public function diary()
    {
    	return $this->belongsTo('App\Dairy','diary_number');
    }

}
