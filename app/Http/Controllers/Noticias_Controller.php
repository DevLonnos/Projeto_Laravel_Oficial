<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Noticias_Controller extends Controller
{
    public function Noticias() {
        return view('site.Noticias'); 
    }
}