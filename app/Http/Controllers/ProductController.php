<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Area;
use App\Customer;
use App\Contact;
use App\Acquisition;
use App\Product;

class ProductController extends Controller
{
    public function showBranchesProducts($id, $branch){
        $company=$id;
        $branches=$branch;
        $products = Company::join('customers', 'customers.companies_id', '=', 'companies.id')
                ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
                ->join('products', 'products.id', '=', 'acquisitions.products_id')
                ->get();
        
        //$branches = Branch::where("companies_id","=",$id)->get();     
        
        return view('super.product',compact('company','branches','products'));
    }
}
