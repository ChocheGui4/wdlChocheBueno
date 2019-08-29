<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BranchCreate;
use App\Http\Requests\CompanyCreate;
use App\Http\Requests\UserEditCreate;
use App\Http\Requests\UserAddressEditCreate;
use App\Http\Requests\CompanyEditProfileCreate;
use App\Http\Requests\CompanyEditCompanyCreate;
use App\Http\Requests\CompanyEditAddressCreate;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Area;
use App\Customer;
use App\Contact;


class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function companyShow(){
        $companies = Company::orderBy('id','ASC')->get();
        $peoples = People::orderBy('id','ASC')->get();
        
        
        return view('super.company',compact('companies','peoples'));
    }
    public function companyCreate()
    {
        return view('super.addCompany');
    }

    public function companyAdd(CompanyCreate $request)
    {
        
        //Insert users
        $users = new User;
        
        $users ->role= "user";
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

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
        $contact->areas_id = $ided->id;
        $contact->save();   
        //Get contact id
        $ided= Contact::latest('id')->first();
        $id=$ided->id;
        
        //Insert company
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

        //Customer
        $com= Company::latest('id')->first();
        $us= User::latest('id')->first();
        $customers = new Customer;
        $customers->users_id=$us->id;
        $customers->companies_id=$com->id;
        $customers->save();
        
        
        return redirect()->route('companyShow');
        
    }

    
    public function companyEdit($id)
    {
        $compan = Company::find($id);
        $contact = Contact::find($id);
        
        
        return view('super.editCompany', compact('compan','contact'));
    }
    public function showBranches($id){
        $company=$id;
        $branches = Branch::where("companies_id","=",$id)->get();     
        return view('super.branches',compact('branches','company'));
    }


    public function createBranches($id){
        $company=$id;
        
        return view('super.addBranch',compact('company'));
    }


    public function addBranches(BranchCreate $request,$id){
        
        $branch = new Branch;
        $branch ->name= $request->name;
        $branch ->zipcode= $request->zipcode;
        $branch ->district= $request->district;
        $branch ->street= $request->street;
        $branch ->insidenumber= $request->innumber;
        $branch ->exteriornumber= $request->extnumber;
        $branch ->companies_id= $id;
        $branch->save();
        
        $company=$id;
        
        return redirect()->route('showBranches',compact('company'));

        /*$company=$id;
        $branches = Branch::where("companies_id","=",$id)->get();     
        return view('super.branches',compact('branches','company'));*/
    }
    public function companyUpdateProfile(CompanyEditProfileCreate $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->telephone = $request->telephone;
        $contact->save();
        return redirect()->route('companyShow');

    }
    public function companyUpdateCompany(CompanyEditCompanyCreate $request, $id)
    {
        $company = Company::find($id);
        $company->companyname = $request->companyname;
        $company->companyrfc = $request->companyrfc;
        $company->companytelephone = $request->companytelephone;
        $company->save();
        return redirect()->route('companyShow');

    }
    public function companyUpdateAddress(CompanyEditAddressCreate $request, $id)
    {
        $company = Company::find($id);
        $company->zipcode = $request->zipcode;
        $company->district = $request->district;
        $company->street = $request->street;
        $company->exteriornumber = $request->extnumber;
        $company->insidenumber = $request->innumber;
        $company->save();
        return redirect()->route('companyShow');

    }

    
    
    
}
