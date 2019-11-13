<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerCreate;
use App\Http\Requests\CustomerEditCreate;
use App\Http\Requests\CustomerAddressEditCreate;

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


class CustomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customerShow(){
        $peoples = People::orderBy('id','ASC')->get();
        $productos = Product::orderBy('id','ASC')->get();
        $product = People::join('customers', 'customers.people_id', '=', 'people.id')
        ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
        ->join('products', 'products.id', '=', 'acquisitions.products_id')
        // ->where('customers.people_id', '=', $branches)
        ->get();
        // dd($product);
        return view('super.customer', compact('peoples','productos','product'));
    }
    public function customerCreate()
    {
        return view('super.addCustomer');
    }

    public function customerAdd(CustomerCreate $request)
    {
        //Insert users
        $users = new User;
        
        $users ->role= "user";
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

        //Insert people
        $tel2 = $request->telephone2;
        
        // if($tel2=="000-000-0000"){
        //     $tel2 = null;
        // }
        $ema2 = $request->email2;
        // if($ema2=="default@default.com"){
        //     $ema2 = "";
        // }
        $person = new People;
        $person->rfc = $request->rfc;
        $person->name = $request->name;
        $person->img = "contact.png";
        $person->lastname = $request->lastname;
        $person->telephone1 = $request->telephone1;
        $person->telephone2 = $tel2;
        $person->email = $request->email;
        $person->email2 = $ema2;
        $person->zipcode = $request->zipcode;
        $person->district = $request->district;
        $person->street = $request->street;
        $person->insidenumber = $request->innumber;
        $person->exteriornumber = $request->extnumber;
        $person->save();

        //Customer
        $peo= People::latest('id')->first();
        $customers = new Customer;
        $customers->people_id=$peo->id;
        $customers->save();
        
        return redirect()->route('customerShow');
        
    }
    public function customerEdit($id)
    {
        $customer=$id;
        $people = People::find($id);

        return view('super.editCustomer', compact('people','customer'));
    }
    public function customerUpdateProfile(CustomerEditCreate $request, $id, $customer)
    {
        // dd("Entro a editar perfil de customer");
        // return $request->all();
        $people = People::find($id);
        $image = $people->img;
        if($request->img!=""){
            $image = $request->file('img')->store('public');
        }
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->rfc = $request->rfc;
        $people->img = $image;
        $people->telephone1 = $request->telephone1;
        $people->telephone2 = $request->telephone2;
        $people->email = $request->email;
        $people->email2 = $request->email2;
        $people->save();

        // return view('super.editCustomer', compact('people','customer'));
        return redirect()->route('customerEdit', compact('customer'))
        ->with('success','Successfully updated information');

    }

    public function customerUpdateAddress(CustomerAddressEditCreate $request, $id, $customer)
    {

        $people = People::find($id);
        $people->zipcode = $request->zipcode;
        $people->district = $request->district;
        $people->street = $request->street;
        $people->exteriornumber = $request->extnumber;
        $people->insidenumber = $request->innumber;
        //$usuario->email = $request->email;
        
        $people->save();


        return redirect()->route('customerEdit', compact('customer'))
        ->with('success','Successfully updated information');

    }
    //Productos inicia
    public function AddCustomerProduct($people, $id){
        // dd($people, $id);
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
        $view->people = $people;
        $view->product = $id;
        $view->save();
        
        // dd($products);
        
        return view('super.addProductCustomer', compact('people','id','products','i','prodid','name'));
    }

    //Ajax para agregar productos
    public function datatablecustomerproductsadd($id){
        // $tasks = Product::orderBy('id','ASC')->get();
        return Datatables()     
            ->eloquent(Product::join('category_products', 'category_products.products_id',
            '=','products.id')
            ->join('categories', 'category_products.categories_id',
            '=','categories.id')->where("products_id",$id))//--------------------------------
            ->addColumn('btn','<a 
                id=""
                href="{{ route("productAddCustomer",$id)}}"
                alt="alert"
                style="background: #31B90C; color: white;"
                class="btn" >
                <i class="fa fa-plus"></i>
            </a>')
            ->rawColumns(['btn'])
            ->toJson();
    }
    function productAddCustomer($id){
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
        // if($ac==null){
        //     $license .=(1)."*";
        // }else{
        //     $license .=($ac->salenumber + 1)."*";
        // }
        // dd($license);
        $lic1 = new License;
        $lic1->serialkey = "License";
        $lic1->save();
        $Li = License::orderBy('id','DESC')->latest()->first();
        $license .=($Li->id)."*";
        $Li->serialkey = $license;
        $Li->save();
        
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
        $custom->people_id = $view->people;
        $custom->save();
        
        return redirect()->route('customerShow')
        ->with('success','Product added successfully');

        // dd($view->company,$view->branch,$view->product);
        // $cat->union($prrr)->get();
    }
    //Productos finaliza
    public function customerDelete($id)
    {
        //$direccion=Direccion::find(11);
        // dd($id);
        // delete('Warning!', 'Article successfully deleted!');
        // dd("by");
        // dd("Entrar");
        
        $deleteuser = People::join('customers', 'people.id', '=', 'customers.people_id')
        ->get();
        
        foreach ($deleteuser as $del) {
            $val = $del->id;
            $idpeople = $del->people_id;
            $customer = Customer::find($val);
            $customer->save();
            $acval = $customer->acquisitions_id;
            if($acval!=null){
                $acquisition = Acquisition::find($customer->acquisitions_id);
                $acquisition->save();
                $license = License::find($acquisition->licenses_id);
                $license->save();
            }
            
        }
        
        // dd($customer->acquisitions_id);
        // $acquisition = Acquisition::find();
        $people = People::find($idpeople);
        $people->save();
        return redirect()->route('customerShow');
    }
}
