<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BranchCreate;
use App\Company;
use App\Branch;
use App\People;

class CustomCompanController extends Controller
{
    //

    public function showCC(){
        $companies = Company::orderBy('id','ASC')->get();
        $peoples = People::orderBy('id','ASC')->get();
        
        
        return view('super.companies',compact('companies','peoples'));
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
    
    
    
}

