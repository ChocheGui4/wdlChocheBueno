<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Página principal
    public function Home()
    {
        return view('super.principal');
    }
    
}
