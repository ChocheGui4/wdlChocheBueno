<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Customer;
class CustomController extends Controller
{
    public function showCustomers(){
        
        $peoples = People::orderBy('id','ASC')->get();

        $usuarios = DB::table('people')
        ->join('customers','people.id', '=','customers.people_id')
        ->join('users','customers.users_id', '=','users.id')
        ->select()
        ->get();
                
        //$usuarios= User::orderBy('id','ASC')->paginate(5);
        return view('super.customers', compact('peoples','usuarios'))
            ->with('i',(request()->input('page',1)-1)*5);
        //return view('super.users');
    }
}
