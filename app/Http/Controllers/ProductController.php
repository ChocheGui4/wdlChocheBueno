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
use App\Characteristic;
use App\Product;
use App\License;
use App\AcquisitionType;


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
        
        return view('super.productCompany',compact('company','branches','products'));
    }

    public function showBranchesCreateProduct($id,$branch){
        
        $company = $id;
        $branch = $branch;
        $products=Product::orderBy('id','ASC')->get();
        $i=0;
        $atypes = AcquisitionType::orderBy('id','ASC')->get();

        return view('super.addProduct',compact('company','branch','products','i','atypes'));
    }
    
    public function showBranchesAddProduct(ProductCreate $request, $id, $branch){
        
        $company = $id;
        $branch = $branch;
        $aleatoria="";
        $caracteres = '-ABCDEF-GHIJKLMNOP-QRSTU-VWXYZ-';
        $aleatoria = substr(str_shuffle($caracteres), 0, 45);
        
        //License
        $license = new License;
        $license->serialkey = $aleatoria;
        $license->save();

        //Characteristics
        $charac = new Characteristic;
        $charac->time = $request->time;
        $charac->numberusers =  $request->numberusers;
        $charac->save();


        $atype = AcquisitionType::where("type","=",$request->type)->get();
        foreach ($atype as $type) {
            $typ = $type->id;
        }
        $product = Product::where("name","=",$request->name)->get();
        foreach ($product as $prod) {
            $pr = $prod->id;
        }
        
        //Agregar Adquisición
        $lic= License::latest('id')->first();
        $chara= Characteristic::latest('id')->first();
        $acq = new Acquisition;
        $acq->products_id = $pr;
        $acq->acquisition_types_id = $typ;
        $acq->licenses_id = $lic->id;
        $acq->characteristics_id = $chara->id;
        $acq->save();
        $acquisition= Acquisition::latest('id')->first();

        //Agregar ese producto a la tabla de customer
        $customer = new Customer;
        $customer->acquisitions_id = $acquisition->id;
        $customer->companies_id = $id;
        $customer->branches_id = $branch;
        $customer->save();

        return redirect()->route('showBranchesProducts',compact('company','branch'));
        
    }
    
    
    
    
}
