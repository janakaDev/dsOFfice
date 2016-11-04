<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleCalendar;

class CalenderController extends Controller
{
    public function index()
    {
        return view('adminlte::calender');
    }



    public function cal(GoogleCalendar $calendar)
    {
       	$calendar = new GoogleCalendar;
        $calendarId = "jsbnilantha@gmail.com";
        $result = $calendar->get($calendarId);

    }




}
