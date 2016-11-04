<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $primaryKey = 'number';

    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    } 

    public function diaryRecords()
    {
    	return $this->hasMany('App\DiaryRecord','diary_number');
    }
}
