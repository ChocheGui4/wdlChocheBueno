<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Página principal
    public function index()
    {
        return view('super/principal');
    }
}
