<?php

namespace App\Http\Controllers;
use App\Http\Requests\RuleCreate;
use App\User;
use App\Contact;
use App\Company;
use App\Area;
use App\Person;

class UserController extends Controller
{
    public function index(){
        return view('users.register');
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleCreate $request)
    {
        
        User::create($request->all());
        //Area::create($request->all());

        $users = new User;
        $names="user";
        $users ->name= $names;
        $users ->email= $request->email;
        $users ->password= $request->password;
        $area = new Area;
        $area->name = $request->area;
        $area->save();
        //Contact::create($request->all());
        $ided= Area::latest('id')->first();
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->telephone = $request->telephone;
        $contact->areas_id = $ided->id;
        $contact->save();
        return redirect()->route('login');
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
    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        $res=Direccion::where("usuarios_id","=",$id)->get();
        
        //dd($usuario);

        /*$usuario = DB::table('usuarios')
        ->join('direccions','usuarios.id', '=','direccions.usuarios_id')
        ->select()
        ->where('usuarios_id', $id);
        dd($usuario);*/
        return view('usuario.edit', compact('usuario','res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearReglas $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $usuario = Usuarios::find($id);
        $usuario->name = $request->get('name');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->email = $request->get('email');
        $usuario->password = $request->get('password');
        $usuario->save();


        return redirect()->route('direccion.edit',$id)
                        ->with('success','Usuario actualizado.');

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
