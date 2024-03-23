<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre_Controller extends Controller
{
    public function Sobre() {
        return view('site.Sobre');
    }
}
