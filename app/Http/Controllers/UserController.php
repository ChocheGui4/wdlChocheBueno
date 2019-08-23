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

class UserController extends Controller
{
    public function index(){
        $usuarios=User::where("role","=",'user')->paginate(5);
        //$usuarios= User::orderBy('id','ASC')->paginate(5);
        return view('super.users', compact('usuarios'))
            ->with('i',(request()->input('page',1)-1)*5);
        //return view('super.users');
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
        
        //Insert users
        $users = new User;
        $names="user";
        $users ->role= $names;
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

        
        
        $kindoption = $request->kind;
        
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
        }
        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuarios::find($id);
        $res=Direccion::where("usuarios_id","=",$id)->get();
        return view('usuario.show', compact('usuario','res'));
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
        $customer = Customer::where("users_id","=",$usuario->id)->get();
        foreach ($customer as $cus) {
            $val=$cus->id;
        }
        $people = People::find($val);

        return view('super.editUser', compact('usuario','people'));
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
    public function destroy($id)
    {
        //$direccion=Direccion::find(11);
        $res=Direccion::where("usuarios_id","=",$id);
        $res->delete();
        $usuario = Usuarios::find($id);
        $usuario->delete();
        return redirect()->route('usuario.index')
                        ->with('success','Usuario eliminado.');
    }
}
