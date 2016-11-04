<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	//primary key is id. So automaticall ok.
	public $incrementing = false; 

	public function advances()
	{
		return $this->hasMany('App\Advance');
	}

	public function diaries()
	{
		return $this->hasMany('App\Diary');
	}
}
