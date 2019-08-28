<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Página principal
    public function Home()
    {
        return view('super.principal');
    }
    
}
