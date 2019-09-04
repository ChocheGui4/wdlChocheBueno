<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreate;
use App\Http\Requests\ProductEditCreate;
use App\Http\Requests\ProductAddCreate;

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
        $i=0;
        
        return view('super.product', compact('products','i'));
        
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
        //dd($products);
        
        return view('super.addProduct',compact('company','branch','products','i','atypes'));
    }
    
    public function showBranchesAddProduct(ProductCreate $request, $id, $branch){
        
        $company = $id;
        $branch = $branch;
        $aleatoria="";
        $caracteres = '-ABCDEF-GHIJKLMNOP-QRSTU-VWXYZ-';
        $aleatoria = substr(str_shuffle($caracteres), 0, 45);
        
        //Prueba
        $product = Product::where("name","=",$request->name)->get();
        foreach ($product as $prod) {
            $pr = $prod->id;
        }

        $same= Product::join('acquisitions', 'acquisitions.products_id', '=', 'products.id')
        ->join('customers', 'acquisitions.id', '=', 'customers.acquisitions_id')
        ->where('acquisitions.products_id', '=', $pr)
        ->where('customers.branches_id', '=', $branch)
        ->get();
        $samy=null;
        foreach ($same as $sam) {
            $samy = $sam->products_id;
            $char = $sam->characteristics_id;
            $acq = $sam->acquisitions_id;
        }
        if($samy){
            
            $charac = Characteristic::find($char);
            $charac->time=$request->time;
            $charac->numberusers =  $request->numberusers;
            $charac->save();

            $acqui = Acquisition::find($acq);
            $acqui->acquisition_types_id =  1;
            $acqui->save();
            
        }else{
            
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
            /*$product = Product::where("name","=",$request->name)->get();
            foreach ($product as $prod) {
                $pr = $prod->id;
            }*/
            
            //$same= Acquisition::latest()->first();

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
        }

        

        return redirect()->route('showBranchesProducts',compact('company','branch'));
        
        
    }
    function productCreate(ProductAddCreate $request){
        $producto = new Product;
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->time = $request->time;
        $producto->period = $request->period;
        $producto->users = $request->users;
        if($request->storage!=0){
            $producto->storage = $request->storage;
            $producto->unitstorage = $request->unitstorage;
        }
        $producto->save();
        
        return redirect()->route('productsShow');
    }

    function productEdit(ProductEditCreate $request){
        $productos = Product::where("name","=",$request->name)->get();
        foreach ($productos as $product) {
            $prod = $product->id;
        }
        $producto = Product::find($prod);
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->save();
        
        return redirect()->route('productsShow');
    }
    function productDelete($id){
        
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productsShow');
    }
    
    
    
    
}

