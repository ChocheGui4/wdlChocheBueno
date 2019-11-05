<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreate;
use App\Http\Requests\ProductEditCreate;
use App\Http\Requests\ProductAddCreate;
use App\Http\Requests\ProductAddSpecific;


use App\Acquisition;
use App\AcquisitionType;
use App\Area;
use App\Branch;
use App\Category;
use App\CategoryCopy;
use App\CategoryProduct;
use App\Characteristic;
use App\Company;
use App\Customer;
use App\Disc;
use App\License;
use App\Maker;
use App\MailService;
use App\Memory;
use App\NumberUser;
use App\NumberUserStorage;
use App\People;
use App\Processor;
use App\Product;
use App\ProductCopy;
use App\ProductList;
use App\Storage;
use App\UnitStorage;
use App\User;
use App\ViewAdd;
use App\Year;
use DB;
use Yajra\Datatables\Datatables;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function productsShow(){
        
        $products=Product::orderBy('id','ASC')->get();
        $i=0;
        $makers = Maker::orderBy('id','ASC')->get();
        $processors = Processor::orderBy('id','ASC')->get();
        $memories = Memory::orderBy('id','ASC')->get();
        $discs = Disc::orderBy('id','ASC')->get();
        $numberusers = NumberUser::orderBy('id','ASC')->get();
        $numberuserstorage = NumberUserStorage::orderBy('id','ASC')->get();
        $years = Year::orderBy('id','ASC')->get();
        $mails = MailService::orderBy('id','ASC')->get();
        $storage = Storage::orderBy('id','ASC')->get();
        // $unitstorage = UnitStorage::orderBy('id','ASC')->get();
        $nus = NumberUserStorage::orderBy('id','ASC')->get();

        //Con esta consulta vemos si se ha adquirido cada producto
        $ac = Acquisition::join('products', 'products.id', '=',
        'acquisitions.products_id')->get();
        $le = count($ac);
        // dd($ac);
        $p=1;
        $count=1;
        return view('super.product', compact('products',
        'i','makers','processors','memories','discs',
        'numberusers','mails','years','storage',/*'unitstorage',*/'nus',
        'ac','le','p','count'));
        
    }
    
    function productCreate(ProductAddCreate $request){
        $producto = new Product;
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->urlimg = $request->file('urlimg')->store('public');
        $producto->save();        
        return redirect()->route('productsShow');
    }

    function productAddSpecific(ProductAddSpecific $request){
        
        $mail = null;
        $umail = null;
        $storage = null;
        $ustorage = null;
        $nstorage = null;
        $nu = $request->numberuser;
        $product = Product::where("name",$request->name)->get();
        foreach ($product as $prod) {
            $ided = $prod->id;
        }
        if($request->name=="Warriors Defender Mail"){
            $mail = $request->storagem;
            $umail = "GB";
        }
        if($request->name=="Warriors Defender Storage"){
            $storage = $request->storage;
            $ustorage = "TB";
            $nstorage = $request->numberstorage;
            $nu = null;
        }
        $category = new Category;
        $category->maker = $request->maker;
        $category->processor = $request->processor;
        $category->memory = $request->memory;
        $category->disc = $request->disc;
        $category->storagem = $mail;
        $category->unitstoragemail = $umail;
        $category->storage = $storage;
        $category->unitstorage = $ustorage;
        $category->numberstorage = $nstorage;
        $category->year = $request->year;
        $category->period = "Year";
        $category->numberuser = $nu;
        $category->offer = $request->offer;
        $category->save();
        $cat = Category::orderBy('id','DESC')->latest()->first();
        $catprod = new CategoryProduct;
        $catprod->products_id = $ided;
        $catprod->categories_id = $cat->id;
        $catprod->save();
        return redirect()->route('productsShow');
    }


    // protected $prodid=3;
    public function productsShowSpecific($id){    
        $products = Category::join('category_products', 'categories.id', '=',
        'category_products.categories_id')
        ->join('products', 'products.id', '=',
        'category_products.products_id')
        ->get();
        $name = Product::find($id);
        // dd($names->id);
        $i=0;
        $prodid = $id;
        
        return view('super.showProduct', compact('products','i','prodid','name'));
    }

    public function AddCompanyProduct($company, $branch, $id){  
        $products = Product::join('category_products', 'category_products.products_id',
            '=','products.id')
            ->join('categories', 'category_products.categories_id',
            '=','categories.id')
            ->where("category_products.products_id",$id)
            ->get();
        $name = Product::find($id);
        // dd($names->id);
        $i=0;
        $prodid = $id;
        $view = new ViewAdd;
        $view->company = $company;
        $view->branch = $branch;
        $view->product = $id;
        $view->save();
        // dd($products);
        
        return view('super.addProductCompany', compact('company','branch','products','i','prodid','name'));
    }
    //Datatable products
    public function datatableproducts($id){
        // $tasks = Product::orderBy('id','ASC')->get();
        return Datatables()     
            ->eloquent(Category::join('category_products', 'categories.id', '=',
            'category_products.categories_id')
            ->join('products', 'products.id', '=',
            'category_products.products_id')->where("products_id",$id))
            ->addColumn('btn','<a 
                id="delete" 
                style="background: #DD1E00; color: white;" 
                href="{{ route("productDelete",$id)}}" 
                alt="alert" 
                class="btn" >
                <i class="fa fa-trash"></i>
            </a>')
            ->rawColumns(['btn'])
            ->toJson();
    }
    public function datatableproductsadd($id){
        // $tasks = Product::orderBy('id','ASC')->get();
        return Datatables()     
            ->eloquent(Product::join('category_products', 'category_products.products_id',
            '=','products.id')
            ->join('categories', 'category_products.categories_id',
            '=','categories.id')->where("products_id",$id))//--------------------------------
            ->addColumn('btn','<a 
                id=""
                href="{{ route("productAddCompany",$id)}}"
                alt="alert"
                style="background: #31B90C; color: white;"
                class="btn" >
                <i class="fa fa-plus"></i>
            </a>')
            ->rawColumns(['btn'])
            ->toJson();
    }
    
    function productAddCompany($id){
        $cat = Category::find($id);
        $prrr = Product::orderBy('id','ASC')->get();
        $ac = Acquisition::orderBy('id','DESC')->latest()->first();
        $ma = Maker::where("namem",$cat->maker)->first();
        $pr = Processor::where("namep",$cat->processor)->first();
        $me = Memory::where("sizem",$cat->memory)->first();
        $di = Disc::where("typed",$cat->disc)->first();
        $license = "";
        $license = "*WD";
        $license .=$ma->valuem;
        $license .=$pr->valuep;
        $license .=$me->valueme;
        $now = new \DateTime();
        $license .=$now->format('dmy');
        $license .=$di->valued."-";
        if($ac==null){
            $license .=(1)."*";
        }else{
            $license .=($ac->salenumber + 1)."*";
        }
        // dd($license);
        $lic = new License;
        $lic->serialkey = $license;
        $lic->save();
        
        $view = ViewAdd::orderBy('id','DESC')->latest()->first();
        $company = $view->company;
        $branch = $view->branch;
        $lic = License::orderBy('id','DESC')->latest()->first();
        $acq = new Acquisition;
        if($ac==null){
            $acq->salenumber = 1;
        }else{
            $acq->salenumber = $ac->salenumber + 1;
        }
        
        $acq->products_id = $view->product;
        $acq->acquisition_types_id = 1;
        $acq->licenses_id = $lic->id;
        $acq->save();
        $acq = Acquisition::orderBy('id','DESC')->latest()->first();

        $custom = new Customer;
        $custom->acquisitions_id = $acq->id;
        $custom->companies_id = $view->company;
        $custom->branches_id = $view->branch;
        $custom->save();
        
        return redirect()->route('showBranchesProducts',compact('company','branch'));

        // dd($view->company,$view->branch,$view->product);
        // $cat->union($prrr)->get();
    }

    public function showBranchesProducts($id, $branch){
        $company=$id;
        $branches=$branch;
        $brans = Branch::find($branch);
        
        //dd($company,$branches);
        $productos = Product::orderBy('id','ASC')->get();
        
        $products = Company::join('customers', 'customers.companies_id', '=', 'companies.id')
                ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
                ->join('products', 'products.id', '=', 'acquisitions.products_id')
                ->select('customers.id','products.name','products.urlimg')
                ->where('customers.branches_id', '=', $branches)
                ->get();
        // dd($products);        
        return view('super.productCompany',compact('company','branches','brans','products','productos'));
    }
    
    public function showPeopleProducts($id){
        $people=$id;
        //dd($company,$branches);
        
        $products = People::join('customers', 'customers.people_id', '=', 'people.id')
                ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
                ->join('products', 'products.id', '=', 'acquisitions.products_id')
                ->where('customers.people_id', '=', $people)
                ->get();
        // dd($products);
        //$branches = Branch::where("companies_id","=",$id)->get();     
        
        return view('super.productCustomer',compact('people','products'));
    }
    public function showBranchesCreateProduct($id,$branch){
        $company = $id;

        $products=Product::orderBy('id','ASC')->get();
        $i=0;
        
        return view('super.productShowCompany', compact('products','company','branch','i'));
    }
    
    public function showBranchesAddProduct(ProductCreate $request, $id, $branch){
        $company = $id;
        $branch = $branch;
        //dd($company, $branch);
        //dd($request->storage);
        //$aleatoria="";
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
            if($request->storage!=0){
                $charac->storage =  $request->storage;
            }
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
            if($request->storage!=0){
                $charac->storage =  $request->storage;
            }
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
        
        $product = Category::find($id);
        $product->save();
        
    }

    function productDeleteGeneral($id){

        $cp = CategoryProduct::where("products_id",$id)->get();
        if($cp==null){
            $product = Product::find($id);
            $prodc = new ProductCopy;
            $prodc->name = $product->name;
            $prodc->description = $product->description;
            $prodc->urlimg = $product->urlimg;
            $prodc->save();
            $product->delete();
        }else{
            $product = Product::find($id);
            foreach($cp as $cap){
                $category = Category::find($cap->categories_id);
                $cac = new CategoryCopy;
                $cac->maker = $category->maker;
                $cac->processor = $category->processor;
                $cac->memory = $category->memory;
                $cac->disc = $category->disc;
                $cac->storagem = $category->storagem;
                $cac->unitstoragemail = $category->unitstoragemail;
                $cac->storage = $category->storage;
                $cac->unitstorage = $category->unitstorage;
                $cac->numberstorage = $category->numberstorage;
                $cac->year = $category->year;
                $cac->period = $category->period;
                $cac->numberuser = $category->numberuser;
                $cac->offer = $category->offer;
                $cac->name_product = $product->name;
                $cac->save();
                $category->delete();

                //Falta la opción de cuando el producto fu adquirido 
                //por empresas y/o sucursales y personas físicas
            }
            
            $prodc = new ProductCopy;
            $prodc->name = $product->name;
            $prodc->description = $product->description;
            $prodc->urlimg = $product->urlimg;
            $prodc->save();
            $product->delete();
        }

        
        
    }
    function deleteProductBranch($id){
        $customer = Customer::find($id);
        $customer->save();
        $acquisition = Acquisition::find($customer->acquisitions_id);
        $acquisition->save();
        $license = License::find($acquisition->licenses_id);
        $license->save();
        return redirect()->route('productsShow');
    }
    
    
    
    
    
}


