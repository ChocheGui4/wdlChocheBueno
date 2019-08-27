<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Página principal
    public function showHome()
    {
        return view('super.principal');
    }
    
}
