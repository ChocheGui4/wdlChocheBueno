<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerCreate;
use App\Http\Requests\CustomerEditCreate;
use App\Http\Requests\CustomerAddressEditCreate;

use DB;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Customer;

class CustomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function customerShow(){
        
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
    public function customerEdit($id)
    {
        $customer=$id;
        $peoples = People::find($id);

        return view('super.editCustomer', compact('peoples','customer'));
    }
    public function customerUpdateProfile(CustomerEditCreate $request, $id)
    {

        $people = People::find($id);
        
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->telephone = $request->telephone;
        $people->rfc = $request->rfc;

        //$usuario->email = $request->email;
        
        $people->save();


        return redirect()->route('customerShow');

    }

    public function customerUpdateAddress(CustomerAddressEditCreate $request, $id)
    {

        $people = People::find($id);
        $people->zipcode = $request->zipcode;
        $people->district = $request->district;
        $people->street = $request->street;
        $people->exteriornumber = $request->extnumber;
        $people->insidenumber = $request->innumber;
        //$usuario->email = $request->email;
        
        $people->save();


        return redirect()->route('customerShow');

    }
}
