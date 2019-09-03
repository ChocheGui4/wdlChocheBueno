<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreate;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function productsShow(){
        
        $products=Product::orderBy('id','ASC')->get();

        return view('super.product', compact('products'));
        
    }


    public function showBranchesProducts($id, $branch){
        $company=$id;
        $branches=$branch;
        
        $products = Company::join('customers', 'customers.companies_id', '=', 'companies.id')
                ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
                ->join('products', 'products.id', '=', 'acquisitions.products_id')
                ->where('customers.branches_id', '=', $branch)
                ->get();
        
        //$branches = Branch::where("companies_id","=",$id)->get();     
        
        return view('super.product',compact('company','branches','products'));
    }

    public function showBranchesCreateProduct($id,$branch){
        
        $company = $id;
        $branch = $branch;
        return view('super.addProduct',compact('company','branch'));
    }
    public function showBranchesAddProduct(ProductCreate $request, $id, $branch){
        
        $company = $id;
        $branch = $branch;
        
        
        /*$product = new Product;
        
        $product ->name= $request->name;
        $product ->time= $request->time;
        $product ->numberusers= $request->numberusers;
        $product ->description= $request->description;
        $product->save();*/
        return redirect()->route('showBranchesProducts',compact('company','branch'));
        
    }
    
    
    
}
