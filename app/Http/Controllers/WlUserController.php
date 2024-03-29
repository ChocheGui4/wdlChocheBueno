<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\WlUserCreate;
use App\Http\Requests\WlUserEditCreate;

class WlUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showWlUsers(){
        $usuarios=User::orderBy('id','ASC')->where("role","<>",'user')->get();
        $i=0;
        return view('super.wlUser', compact('usuarios','i'));
        //return view('super.wlUsers');
    }

    public function wluserCreate(){
        return view('super.addWlUser');
    }
    public function wluserAdd(WlUserCreate $request)
    {
        
        //Insert users
        $users = new User;
        $users ->role= $request->areas;
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        
        $users->save();

        return redirect()->route('showWlUsers');
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
    public function wluserEdit($id)
    {
        $usuario = User::find($id);
        return view('super.editWlUser', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function wluserUpdate(WlUserEditCreate $request, $id)
    {

        $usuario = User::find($id);
        $usuario->role = $request->areas;
        $usuario->email = $request->email;
        $usuario->save();


        return redirect()->route('showWlUsers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function wluserDelete($id)
    {
        //$direccion=Direccion::find(11);
        
        $group = User::find($id)->delete();
        /*$res=Direccion::where("usuarios_id","=",$id);
        $res->delete();
        $usuario = Usuarios::find($id);
        $usuario->delete();*/
        return redirect()->route('showWlUsers');
    }
}

