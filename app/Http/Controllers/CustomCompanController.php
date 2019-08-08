<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomCompanController extends Controller
{
    //

    public function index(){
        return view('super.customerscompanies');
    }
}
