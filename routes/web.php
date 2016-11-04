<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('emloyees',function(){
   return view('/employee');
});



Route::get('fulldetails/{id}', 'employeeController@index');
Route::get('calender', 'calenderController@cal');


Route::resource('addEmployee', 'AddEmployeeController');

