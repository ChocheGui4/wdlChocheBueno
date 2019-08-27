<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerCreate;
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
        return view('super.customer', compact('peoples','usuarios'))
            ->with('i',(request()->input('page',1)-1)*5);
        //return view('super.users');
    }
    public function customerCreate()
    {
        return view('super.addCustomer');
    }

    public function customerAdd(CustomerCreate $request)
    {
        
        //Insert users
        $users = new User;
        
        $users ->role= "user";
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

        //Insert people
        $person = new People;
        $person->rfc = $request->rfc;
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->telephone = $request->telephone;
        $person->zipcode = $request->zipcode;
        $person->district = $request->district;
        $person->street = $request->street;
        $person->insidenumber = $request->innumber;
        $person->exteriornumber = $request->extnumber;
        $person->save();

        //Customer
        $us= User::latest('id')->first();
        $peo= People::latest('id')->first();
        $customers = new Customer;
        $customers->users_id=$us->id;
        $customers->people_id=$peo->id;
        $customers->save();
        
        return redirect()->route('showCustomers');
        
    }
}
