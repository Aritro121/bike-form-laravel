<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTeam extends Controller
{
    public function team(){
        return view('team');
    }
}
