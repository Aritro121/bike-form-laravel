<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTestimonial extends Controller
{
    public function testimonial(){
        return view('testimonial');
    }
}
