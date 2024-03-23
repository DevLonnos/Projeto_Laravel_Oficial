<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fornecedores_Controller extends Controller
{
    public function Fornecedores() {
        return view('site.Fornecedores'); 
    }
}