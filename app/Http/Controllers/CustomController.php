<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerCreate;
use App\Http\Requests\CustomerEditCreate;
use App\Http\Requests\CustomerAddressEditCreate;

use DB;
use App\Acquisition;
use App\Company;
use App\Customer;
use App\Branch;
use App\License;
use App\People;
use App\Product;
use App\User;
use App\ViewAdd;


class CustomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customerShow(){
        $peoples = People::orderBy('id','ASC')->get();
        $productos = Product::orderBy('id','ASC')->get();

        return view('super.customer', compact('peoples','productos'));
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
        
        // dd($products);
        
        return view('super.addProductCustomer', compact('people','id','products','i','prodid','name'));
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
