<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Lava;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Area;
use App\Customer;
use App\Contact;
use App\Acquisition;
use App\Characteristic;
use App\Product;
use App\License;
use App\AcquisitionType;
use DB;

class PrincipalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Página principal
    public function Home()
    {
     
        $products = Product::orderBy('id','DESC')->get();
        $licenses = Customer::join("acquisitions","customers.acquisitions_id","=","acquisitions.id")
        ->join("licenses","acquisitions.licenses_id","=","licenses.id")
        ->join("products","acquisitions.products_id","=","products.id")
        ->select('products.id','products.name')
        ->groupBy('products.id')
        ->get();

        //Para ver número de compañías y clientes
        $cus = Customer::whereNull('acquisitions_id')
        ->select('customers.companies_id','customers.people_id')
        ->groupBy('customers.companies_id','customers.people_id')
        ->get();
        $coun = count($cus);
        // dd($cus,$coun);
        $cuscom = Customer::whereNull('acquisitions_id')->get();
        
        $i=0;
        foreach($cus as $cc){
            if($cc->companies_id != null){
                $i++;
            }
        }
        // dd($i);
        $array = [
            "Companies" => $i,
            "People" => $coun-$i,
        ];
        
        //Para ver sucursales de compañías
        $cuscompany = Customer::join("companies","customers.companies_id","=","companies.id")
            ->join("branches","customers.branches_id","=","branches.id")
            ->select('customers.companies_id','companies.companyname','companies.id')
            ->groupBy('customers.companies_id','companies.id')
            ->get();
        $c=0;
        
        if(count($cuscompany)!=0){
            foreach($cuscompany as $cuscom){

                $compa[$cuscom->companyname]=0;
                $compa1[$c]=$cuscom->companyname;
                $c++;
            }
        }else{
            $compa['null']=0;
        }
        
        
        $customers = Customer::join("companies","customers.companies_id","=","companies.id")
            ->join("branches","customers.branches_id","=","branches.id")
            ->whereNotNull("customers.branches_id")
            ->get();
        $i=0;
        foreach($customers as $cust){
            for ($j=0; $j < count($compa); $j++) { 
                if($cust->companyname == $compa1[$j]){
                    $compa[$compa1[$j]] +=1;
                }    
            }
        }
        
        return view('super.principal',compact('licenses','customers'
        ,'cuscompany','products','array','compa'));
    }
    
}
