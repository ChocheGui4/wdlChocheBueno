<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BranchCreate;
use App\Http\Requests\CompanyContact;
use App\Http\Requests\BranchContact;
use App\Http\Requests\CompanyCreate;
use App\Http\Requests\UserEditCreate;
use App\Http\Requests\UserAddressEditCreate;
use App\Http\Requests\CompanyEditProfileCreate;
use App\Http\Requests\CompanyEditCompanyCreate;
use App\Http\Requests\CompanyEditAddressCreate;
use App\Http\Requests\BranchEdit;
use App\Http\Requests\BranchEditProfile;

use App\Acquisition;
use App\Branch;
use App\BranchCopy;
use App\Company;
use App\Contact;
use App\CategoryProduct;
use App\ContactCompany;
use App\ContactBranch;
use App\ContactBranchCopy;
use App\History;
use App\License;
use App\People;
use App\User;
use App\Customer;



class CompanyController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function companyShow(){
        $role= \Auth::user()->role;
        if($role === 'Super'){
            $companies = Company::orderBy('id','ASC')->get();
            $customers = Customer::join("companies","customers.companies_id","=","companies.id")
            ->join("branches","customers.branches_id","=","branches.id")
            ->select('customers.id as idcustom','customers.companies_id',
            'customers.acquisitions_id','branches.id as bid',"branches.branchname")
            ->groupBy('bid','idcustom')
            ->get();
            // $branch = Customer::join("companies","customers.companies_id","=","companies.id")
            // ->join("branches","customers.branches_id","=","branches.id")
            // ->select('branches.id as bid',"branches.branchname")
            // ->groupBy('bid','idcustom')
            // ->get();
            $i = 1;
            // dd($companies);
            // dd($customers);
        
            return view('super.company',compact('companies','customers','i'));
        } else{
            return redirect()->route('Home');
        }
        // $companies = Company::orderBy('id','ASC')->get();
        // $peoples = People::orderBy('id','ASC')->get();
        
        
        // return view('super.company',compact('companies','peoples'));
    }
    public function companyCreate()
    {
        return view('super.addCompany');
    }
    public function contactCompany(){
        $companies = Company::orderBy('id','ASC')->get();
        return view('super.contactCompany', compact('companies'));
    }
    public function contactBranch($company, $branch){
        
        return view('super.contactBranch', compact('company','branch'));
    }

    public function contactAddCompany(CompanyContact $request){
        
        
        // dd($company->id);
        //Insert contact
        $contactcc = new ContactCompany;
        $contactcc->name = $request->name;
        $contactcc->lastname = $request->lastname;
        $contactcc->telephone1 = $request->telephone1;
        $contactcc->telephone2 = $request->telephone2;
        $contactcc->email = $request->email;
        $contactcc->email2 = $request->email2;
        $contactcc->area = $request->area;
        $contactcc->save();
        
        $compan = $request->companyname;
        $company = Company::where("companyname","$compan")->first();
        $id2=$company->id;
        $ccs= ContactCompany::latest('id')->first();
        $id1=$ccs->id;
        

        $Cont = new Contact;
        $Cont->companies_id = $id2;
        $Cont->contact_companies_id = $id1;
        $Cont->save();


        
        return redirect()->route('companyShow');
    }
    
    //Agergar contactos a sucursales
    public function contactAddBranch(BranchContact $request, $company, $branch){
        // dd($branch);
        //Insert contact
        $contactcc = new ContactBranch;
        $contactcc->name = $request->name;
        $contactcc->lastname = $request->lastname;
        $contactcc->telephone1 = $request->telephone1;
        $contactcc->telephone2 = $request->telephone2;
        $contactcc->email = $request->email;
        $contactcc->email2 = $request->email2;
        $contactcc->area = $request->area;
        $contactcc->branches_id = $branch;
        $contactcc->save();
        
        return redirect()->route('showBranches', compact('company'));
    }
    public function companyAdd(CompanyCreate $request)
    {
        
        //Insert users
        $users = new User;
        $users ->role= "user";
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();
        //dd("Ya agregó al usuario, checar en la db otra vez");

        
        //Insert contact
        $contactcc = new ContactCompany;
        $contactcc->name = $request->name;
        $contactcc->lastname = $request->lastname;
        $contactcc->telephone1 = $request->telephone1;
        $contactcc->telephone2 = $request->telephone2;
        $contactcc->email = $request->email;
        $contactcc->email2 = $request->email2;
        $contactcc->area = $request->area;
        $contactcc->save();   
        
        //Get contact id
        
        //Insert company
        $company = new Company;
        $company->companyrfc = $request->companyrfc;
        $company->companyname = $request->companyname;
        $company->companyimg = "company.png";
        $company->companytelephone1 = $request->companytelephone1;
        $company->companytelephone2 = $request->companytelephone2;
        $company->companyemail1 = $request->companyemail1;
        $company->companyemail2 = $request->companyemail2;
        $company->zipcode = $request->zipcode;
        $company->district = $request->district;
        $company->street = $request->street;
        $company->insidenumber = $request->innumber;
        $company->exteriornumber = $request->extnumber;
        $company->save();

        $ccs= ContactCompany::latest('id')->first();
        $id1=$ccs->id;
        $coms= Company::latest('id')->first();
        $id2=$coms->id;

        $Cont = new Contact;
        $Cont->companies_id = $id2;
        $Cont->contact_companies_id = $id1;
        $Cont->save();

        //Branch
        $branch = new Branch;
        $branch ->branchname= "Own";
        $branch ->branchimg= "sucursal.jpg";
        $branch ->branchtelephone1= $request->companytelephone1;
        $branch ->branchtelephone2= $request->companytelephone2;
        $branch ->branchemail1= $request->companyemail1;
        $branch ->branchemail2= $request->companyemail2;
        $branch ->zipcode= $request->zipcode;
        $branch ->district= $request->district;
        $branch ->street= $request->street;
        $branch ->insidenumber= $request->innumber;
        $branch ->exteriornumber= $request->extnumber;
        $branch->save();

        //Customer
        $com= Company::latest('id')->first();
        $br= Branch::latest('id')->first();
        // $us= User::latest('id')->first();
        $customers = new Customer;
        $customers->companies_id=$com->id;
        $customers->branches_id=$br->id;
        $customers->save();
        
        // dd("Se agregaron: usuario login, contacto y empresa");
        return redirect()->route('companyShow');
        
    }

    //Editar compañía
    public function companyEdit($id)
    {
        $compan = Company::find($id);
        $contact = ContactCompany::find($id);
        // dd($contact->email);
        
        return view('super.editCompany', compact('compan','contact'));
    }

    //Mostrar sucursales
    public function showBranches($id){
        $company=$id;
        $contacts = ContactBranch::orderBy("id","ASC")->get();
        $branches = Branch::join('customers', 'customers.branches_id', '=', 'branches.id')
                ->join('companies', 'companies.id', '=', 'customers.companies_id')
                //->groupBy('branches.id','customers.branches_id','companies.id')
                ->select('branches.id','branches.branchname','branches.branchimg',
                'branches.zipcode','branches.district','branches.street',
                'branches.insidenumber','branches.exteriornumber')
                ->groupBy('branches.id')
                ->where('customers.companies_id', '=', $id)
                ->get();
        
        $branch1 = null;
        foreach ($branches as $branch ) {
            $branch1 = $branch->branches_id;
        }
        // return $branches;
        
        //$branches = Branch::join("companies_id","=",$id)->get();     
        return view('super.branches',compact('branches','company','branch1','contacts'));
    }


    public function createBranches($id){
        $company=$id;
        return view('super.addBranch',compact('company'));
    }

    public function branchEdit($id, $compan){
        $Company = $compan;
        $branch = Branch::find($id);
        $contacts = ContactBranch::where("branches_id",$id)->orderBy('id','ASC')->get();
        // dd($contacts);
        
        
        return view('super.editBranch', compact('branch','contacts','Company'));
    }


    public function addBranches(BranchCreate $request,$id){

        $branch = new Branch;
        $branch ->branchname= $request->branchname;
        $branch ->branchimg= "sucursal.jpg";
        $branch ->branchtelephone1= $request->branchtelephone1;
        $branch ->branchtelephone2= $request->branchtelephone2;
        $branch ->branchemail1= $request->branchemail1;
        $branch ->branchemail2= $request->branchemail2;
        $branch ->zipcode= $request->zipcode;
        $branch ->district= $request->district;
        $branch ->street= $request->street;
        $branch ->insidenumber= $request->innumber;
        $branch ->exteriornumber= $request->extnumber;
        $branch->save();
        
        $branch = Branch::latest('id')->first();
        $contact = new ContactBranch;
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->telephone1 = $request->telephone1;
        $contact->telephone2 = $request->telephone2;
        $contact->email = $request->email;
        $contact->email2 = $request->email2;
        $contact->area = $request->area;
        $contact->branches_id = $branch->id;
        $contact->save();

        $ided= Branch::latest('id')->first();
        $customer = new Customer;
        $customer->companies_id = $id;
        $customer->branches_id = $ided->id;        
        $customer->save();

        
        $company=$id;
        
        return redirect()->route('companyShow');

        /*$company=$id;
        $branches = Branch::where("companies_id","=",$id)->get();     
        return view('super.branches',compact('branches','company'));*/
    }
    public function companyUpdateProfile(CompanyEditProfileCreate $request, $id, $compan)
    {
        // dd($idc);
        // dd($request->file('companyimg')->store('public'));
        // return redirect()->route('companyShow');
        $contact = ContactCompany::find($id);
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->telephone1 = $request->telephone1;
        $contact->telephone2 = $request->telephone2;
        $contact->email = $request->email;
        $contact->email2 = $request->email2;
        $contact->area = $request->area;
        // dd("Ya se gaurdaron");
        $contact->save();
        return redirect()->route('companyEdit',compact('compan'));

    }
    public function companyUpdateCompany(CompanyEditCompanyCreate $request, $id)
    {
        // return $request->all();
        // return $request->file('companyimg')->store('public');
        $compan = $id;
        $company = Company::find($id);
        $img = $company->companyimg;
        if($request->companyimg!=""){
            $img = $request->file('companyimg')->store('public');
        }
        
        $company->companyname = $request->companyname;
        $company->companyrfc = $request->companyrfc;
        $company->companyimg = $img;
        $company->companytelephone1 = $request->companytelephone1;
        $company->companytelephone2 = $request->companytelephone2;
        $company->companyemail1 = $request->companyemail1;
        $company->companyemail2 = $request->companyemail2;
        // dd("Entro a la compania editar");
        $company->save();
        return redirect()->route('companyEdit',compact('compan'));

    }
    public function companyUpdateAddress(CompanyEditAddressCreate $request, $id)
    {
        $compan = $id;
        $company = Company::find($id);
        $company->zipcode = $request->zipcode;
        $company->district = $request->district;
        $company->street = $request->street;
        $company->exteriornumber = $request->extnumber;
        $company->insidenumber = $request->innumber;
        $company->save();
        return redirect()->route('companyEdit',compact('compan'));

    }

    //Editar branches------------------------------------Branches------------
    public function branchUpdateProfile(BranchEditProfile $request,$contact, $id, $company)
    {
        $contact = ContactBranch::find($contact);
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->telephone1 = $request->telephone1;
        $contact->telephone2 = $request->telephone2;
        $contact->email = $request->email;
        $contact->email2 = $request->email2;
        $contact->area = $request->area;
        // dd("Ya se gaurdaron");
        $contact->save();
        return redirect()->route('branchEdit',compact('id','company'))
        ->with('success','Successfully updated information');

    }
    public function branchUpdateCompany(BranchEdit $request, $id,$company)
    {
        $br = $id;
        $branch = Branch::find($id);
        $img = $branch->branchimg;
        if($request->branchimg!=""){
            $img = $request->file('branchimg')->store('public');
        }
        $branch->branchname = $request->branchname;
        $branch->branchimg = $img;
        $branch->branchtelephone1 = $request->branchtelephone1;
        $branch->branchtelephone2 = $request->branchtelephone2;
        $branch->branchemail1 = $request->branchemail1;
        $branch->branchemail2 = $request->branchemail2;
        // dd("Entro a la compania editar");
        $branch->save();
        // return redirect()->route('showBranches',compact('br'));
        return redirect()->route('branchEdit',compact('id','company'))
        ->with('success','Successfully updated information');
        

    }
    public function branchUpdateAddress(CompanyEditAddressCreate $request, $id, $company)
    {
        $branch = Branch::find($id);
        $branch->zipcode = $request->zipcode;
        $branch->district = $request->district;
        $branch->street = $request->street;
        $branch->exteriornumber = $request->extnumber;
        $branch->insidenumber = $request->innumber;
        $branch->save();
        return redirect()->route('branchEdit',compact('id','company'))
        ->with('success','Successfully updated information');

    }
    public function deleteBranch($company, $id)
    {
        // dd("ddudn");
        $borg = Branch::find($id);
        $corg = ContactBranch::where("branches_id",$id)->first();
        // dd($borg);
        $query = Branch::join("customers","customers.branches_id","=","branches.id")
        ->where("branches.id",$id)
        ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        ->whereNotNull("customers.acquisitions_id")
        ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        ->join("products","acquisitions.products_id","=","products.id")
        ->join("category_products","category_products.products_id","=","products.id")
        ->join("categories","category_products.categories_id","=","categories.id")
        ->get();
        
        // $query2 = Branch::join("customers","customers.branches_id","=","branches.id")
        // ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        // ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        // ->get();
        // dd($query);
        foreach ($query as $qu1) {
            $history = new History;
            $history->product = $qu1->name;
            $history->serial = $qu1->serialkey;
            $history->time = $qu1->year;
            $history->period = "year";
            $history->storage = $qu1->storage;
            $history->unitstorage = $qu1->unitstorage;
            $history->description = "Se dio de baja la sucursal y por tanto el producto";
            $history->company = $company;
            $history->branch = $id;
            
            
            $ser = License::where("serialkey",$qu1->serialkey)->first();
            if($ser!=null){
                $history->save();                
                $ser->delete();
            }
            
        }
        
        $branch = new BranchCopy;
        if($borg!=null){
            $branch ->id= $borg->id;
            $branch ->branchname= $borg->branchname;
            $branch ->branchimg= $borg->branchimg;
            $branch ->branchtelephone1= $borg->branchtelephone1;
            $branch ->branchtelephone2= $borg->branchtelephone2;
            $branch ->branchemail1= $borg->branchemail1;
            $branch ->branchemail2= $borg->branchemail2;
            $branch ->zipcode= $borg->zipcode;
            $branch ->district= $borg->district;
            $branch ->street= $borg->street;
            $branch ->insidenumber= $borg->insidenumber;
            $branch ->exteriornumber= $borg->exteriornumber;
            $branch ->companies_id= $company;
            $branch->save();
            $borg->delete();
        }

        
        $contact = new ContactBranchCopy;
        if($corg!=null){
            $contact->id = $corg->id;
            $contact->name = $corg->name;
            $contact->lastname = $corg->lastname;
            $contact->telephone1 = $corg->telephone1;
            $contact->telephone2 = $corg->telephone2;
            $contact->email = $corg->email;
            $contact->email2 = $corg->email2;
            $contact->area = $corg->area;
            $contact->branches_id = $corg->branches_id;
            $contact->save();

            
            $corg->delete();
        }
        
        
        return redirect()->route('companyShow');
    }

    public function companyDelete($id)
    {
        // dd($id);
        $companyorg = Company::find($id);
        $corg = Company::join("contacts","companies.id","=","contacts.companies_id")
        ->join("contact_companies","contact_companies.id","=","contacts.contact_companies_id")
        ->where("contacts.companies_id",$id)->get();
        // dd($corg);

        $query = Company::join("customers","customers.companies_id","=","companies.id")
        ->where("companies.id",$id)
        ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        ->whereNotNull("customers.acquisitions_id")
        ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        ->join("products","acquisitions.products_id","=","products.id")
        ->join("category_products","category_products.products_id","=","products.id")
        ->join("categories","category_products.categories_id","=","categories.id")
        ->get();
        $val = count($query);
        
        // $query2 = Branch::join("customers","customers.branches_id","=","branches.id")
        // ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        // ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        // ->get();
        // dd($query);
        if($val!=0){
            dd("entro");
            foreach ($query as $qu1) {
                dd($qu1);
                $history = new History;
                $history->product = $qu1->name;
                $history->serial = $qu1->serialkey;
                $history->time = $qu1->year;
                $history->period = "year";
                $history->storage = $qu1->storage;
                $history->unitstorage = $qu1->unitstorage;
                $history->description = "Se dio de baja la empresa y por tanto el producto y sucursales";
                $history->company = $id;
                $history->branch = $id;
                
                
                $ser = License::where("serialkey",$qu1->serialkey)->first();
                if($ser!=null){
                                
                    $ser->delete();
                }
                $bnc = Branch::find($qu1->branches_id);
                $branch = new BranchCopy;

                if($bnc!=null){
                    $branch ->id= $bnc->id;
                    $branch ->branchname= $bnc->branchname;
                    $branch ->branchimg= $bnc->branchimg;
                    $branch ->branchtelephone1= $bnc->branchtelephone1;
                    $branch ->branchtelephone2= $bnc->branchtelephone2;
                    $branch ->branchemail1= $bnc->branchemail1;
                    $branch ->branchemail2= $bnc->branchemail2;
                    $branch ->zipcode= $bnc->zipcode;
                    $branch ->district= $bnc->district;
                    $branch ->street= $bnc->street;
                    $branch ->insidenumber= $bnc->insidenumber;
                    $branch ->exteriornumber= $bnc->exteriornumber;
                    $branch ->companies_id= $id;
                    $branch->save();
                    $history->save();  
                    $bnc->delete();

                }
                
            }
        }else{
            $queryc = Company::join("customers","customers.companies_id","=","companies.id")
            ->join("branches","customers.branches_id","=","branches.id")
            ->where("companies.id",$id)
            ->get();
            foreach ($queryc as $quc) {
                $bnc = Branch::find($quc->branches_id);
                $bncc = Branch::join("contact_branches","contact_branches.branches_id",
                "=","branches.id")->get();
                // dd($bncc);
                $contc = new ContactBranchCopy;
                foreach ($bncc as $conta) {
                    $contc->name = $conta->name;
                    $contc->lastname = $conta->lastname;
                    $contc->telephone1 = $conta->telephone1;
                    $contc->telephone2 = $conta->telephone2;
                    $contc->email = $conta->email;
                    $contc->email2 = $conta->email2;
                    $contc->area = $conta->area;
                    $contc->branches_id = $conta->branches_id;
                    $contc->save();
                }
                $branch = new BranchCopy;

                if($bnc!=null){
                    $branch ->id= $bnc->id;
                    $branch ->branchname= $bnc->branchname;
                    $branch ->branchimg= $bnc->branchimg;
                    $branch ->branchtelephone1= $bnc->branchtelephone1;
                    $branch ->branchtelephone2= $bnc->branchtelephone2;
                    $branch ->branchemail1= $bnc->branchemail1;
                    $branch ->branchemail2= $bnc->branchemail2;
                    $branch ->zipcode= $bnc->zipcode;
                    $branch ->district= $bnc->district;
                    $branch ->street= $bnc->street;
                    $branch ->insidenumber= $bnc->insidenumber;
                    $branch ->exteriornumber= $bnc->exteriornumber;
                    $branch ->companies_id= $id;
                    $branch->save();
                    $bnc->delete();

                }
            }
            
        }
        dd("borro sucursales y productos");
        $companycopy = new CompanyCopy;
        if($companyorg!=null){
            $companycopy->id= $borg->id;
            $branch ->branchname= $borg->branchname;
            $branch ->branchimg= $borg->branchimg;
            $branch ->branchtelephone1= $borg->branchtelephone1;
            $branch ->branchtelephone2= $borg->branchtelephone2;
            $branch ->branchemail1= $borg->branchemail1;
            $branch ->branchemail2= $borg->branchemail2;
            $branch ->zipcode= $borg->zipcode;
            $branch ->district= $borg->district;
            $branch ->street= $borg->street;
            $branch ->insidenumber= $borg->insidenumber;
            $branch ->exteriornumber= $borg->exteriornumber;
            $branch ->companies_id= $company;
            $branch->save();
            $borg->delete();
        }

        
        $contact = new ContactBranchCopy;
        if($corg!=null){
            $contact->id = $corg->id;
            $contact->name = $corg->name;
            $contact->lastname = $corg->lastname;
            $contact->telephone1 = $corg->telephone1;
            $contact->telephone2 = $corg->telephone2;
            $contact->email = $corg->email;
            $contact->email2 = $corg->email2;
            $contact->area = $corg->area;
            $contact->branches_id = $corg->branches_id;
            $contact->save();

            
            $corg->delete();
        }
        
        // return redirect()->route('branchEdit',compact('id','company'));
    }
    public function deleteBranchProduct($id, $branch, $product, $specific){
        // dd($id,$branch, $product,$specific);
        $query = Branch::join("customers","customers.branches_id","=","branches.id")
        ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        ->join("products","acquisitions.products_id","=","products.id")
        ->join("category_products","category_products.products_id","=","products.id")
        ->join("categories","category_products.categories_id","=","categories.id")
        ->where("acquisitions.id",$specific)
        ->get();
        // dd($query);
        // $query2 = Branch::join("customers","customers.branches_id","=","branches.id")
        // ->join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        // ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        // ->get();
        // dd($query);
        foreach ($query as $qu1) {
            $history = new History;
            $history->product = $qu1->name;
            $history->serial = $qu1->serialkey;
            $history->time = $qu1->year;
            $history->period = "year";
            $history->storage = $qu1->storage;
            $history->unitstorage = $qu1->unitstorage;
            $history->description = "Se dio de baja el producto";
            $history->company = $id;
            $history->branch = $branch;
            $history->save();
            $ser = License::where("serialkey",$qu1->serialkey)->first();
            $ser->delete();
        }
        
        return redirect()->route('showBranchesProducts',compact('id','branch'));
    }
    

    
    
    
}
