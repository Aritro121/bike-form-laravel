<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBooking extends Controller
{
    public function booking(){
        return view('booking');
    }
}
