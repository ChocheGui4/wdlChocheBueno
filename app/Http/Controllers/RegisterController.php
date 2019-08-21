<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleCreate;
use App\User;
use App\Contact;
use App\Company;
use App\Area;
use App\People;

class RegisterController extends Controller
{
    public function index(){
        return view('users.register');
    }

    public function registerStore(RuleCreate $request)
    {
        
        //Insert users
        $users = new User;
        $names="user";
        $users ->name= $names;
        $users ->email= $request->email;
        $users ->password= encrypt($request->password);
        $users->save();

        
        
        $kindoption = $request->kind;
        
        if ($kindoption=="Physical") {
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
        } else if($kindoption=="Moral"){

            //Insert area
            $area = new Area;
            $areaoption=$request->area;
            $area->name = $request->area;
            $area->save();
            
            //Insert contact
            $ided= Area::latest('id')->first();
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->lastname = $request->lastname;
            $contact->telephone = $request->telephone;
            //$contact->areas_id = $ided->id;
            $contact->save();
            $ided= Contact::latest('id')->first();
            $id=null;
            if($ided!=""){
                $id=$ided->id;
            }
            $company = new Company;
            $company->companyrfc = $request->companyrfc;
            $company->companyname = $request->companyname;
            $company->companytelephone = $request->companytelephone;
            $company->companyemail = $request->companyemail;
            $company->zipcode = $request->zipcode;
            $company->district = $request->district;
            $company->street = $request->street;
            $company->insidenumber = $request->innumber;
            $company->exteriornumber = $request->extnumber;
            $company->contacts_id = $id;
            $company->save();
        }
        
        return redirect()->route('login');
    }
}
