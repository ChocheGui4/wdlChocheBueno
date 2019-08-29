<?php

namespace App\Http\Controllers;
use App\Http\Requests\RuleCreate;
use App\Http\Requests\UserEditCreate;
use App\Http\Requests\UserAddressEditCreate;
use App\User;
use App\Contact;
use App\Company;
use App\Area;
use App\People;
use App\Customer;
use Redirect;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showUsers(){
        $usuarios=User::where("role","<>",'Super')->paginate(5);
        return view('super.user', compact('usuarios'))
            ->with('i',(request()->input('page',1)-1)*5);
        
    }
    public function userCreate()
    {
        return view('super.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userAdd(RuleCreate $request)
    {
        $kindoption = $request->kind;
        if($kindoption=="Physical"){
            $names="User";
        }else if($kindoption=="Moral"){
            $names="Company";
        }
        //Insert users
        $users = new User;
        
        $users ->role= $names;
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

        
        
        
        
        if ($kindoption=="Physical") {
            //Insert people
            $person = new People;
            $person->rfc = $request->rfc;
            $person->name = $request->name;
            $person->lastname = $request->lastname;
            $person->telephone = $request->telephone;
            $person->zipcode = $request->zipcode;
            $person->district = $request->district;
            $person->street = $request->street;
            $person->insidenumber = $request->innumber;
            $person->exteriornumber = $request->extnumber;
            $person->save();

            //Customer
            $us= User::latest('id')->first();
            $peo= People::latest('id')->first();
            $customers = new Customer;
            $customers->users_id=$us->id;
            $customers->people_id=$peo->id;
            $customers->save();
        } else if($kindoption=="Moral"){

            //Insert area
            $area = new Area;
            $areaoption=$request->area;
            $area->name = $request->area;
            $area->save();
            
            //Insert contact
            $ided= Area::latest('id')->first();
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->lastname = $request->lastname;
            $contact->telephone = $request->telephone;
            $contact->areas_id = $ided->id;
            $contact->save();
            $ided= Contact::latest('id')->first();
            $id=null;
            if($ided!=""){
                $id=$ided->id;
            }
            $company = new Company;
            $company->companyrfc = $request->companyrfc;
            $company->companyname = $request->companyname;
            $company->companytelephone = $request->companytelephone;
            $company->companyemail = $request->companyemail;
            $company->zipcode = $request->zipcode;
            $company->district = $request->district;
            $company->street = $request->street;
            $company->insidenumber = $request->innumber;
            $company->exteriornumber = $request->extnumber;
            $company->contacts_id = $id;
            $company->save();

            //Customer
            $com= Company::latest('id')->first();
            $us= User::latest('id')->first();
            $customers = new Customer;
            $customers->users_id=$us->id;
            $customers->companies_id=$com->id;
            $customers->save();
        }
        
        return redirect()->route('showUsers');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userEdit($id)
    {
        $usuario = User::find($id);
        
        return view('super.editUser', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userUpdateProfile(UserEditCreate $request, $id)
    {

        $usuario = People::find($id);
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->telephone = $request->telephone;
        //$usuario->email = $request->email;
        
        $usuario->save();


        return redirect()->route('user.index');

    }

    public function userUpdateAddress(UserAddressEditCreate $request, $id)
    {

        $usuario = People::find($id);
        $usuario->zipcode = $request->zipcode;
        $usuario->district = $request->district;
        $usuario->street = $request->street;
        $usuario->exteriornumber = $request->extnumber;
        $usuario->insidenumber = $request->innumber;
        //$usuario->email = $request->email;
        
        $usuario->save();


        return redirect()->route('user.index');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userDelete($id)
    {
        //$direccion=Direccion::find(11);
        $group = User::find($id)->delete();
        /*$res=Direccion::where("usuarios_id","=",$id);
        $res->delete();
        $usuario = Usuarios::find($id);
        $usuario->delete();*/
        return redirect()->route('showUsers');
    }
}
