<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\WlUserCreate;

class WlUserController extends Controller
{
    public function index(){
        $usuarios=User::where("name","<>",'user')->paginate(5);
        //$usuarios= User::orderBy('id','ASC')->paginate(5);
        return view('super.wlUsers', compact('usuarios'))
            ->with('i',(request()->input('page',1)-1)*5);
        //return view('super.wlUsers');
    }

    public function create(){
        return view('super.addWlUser');
    }
    public function store(WlUserCreate $request)
    {
        
        //Insert users
        $users = new User;
        $users ->name= $request->areas;
        $users ->email= $request->email;
        $users ->password= bcrypt($request->password);
        $users->save();

        return redirect()->route('wluser.index');
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
        $usuario = User::find($id);
        
        
        //dd($usuario);

        /*$usuario = DB::table('usuarios')
        ->join('direccions','usuarios.id', '=','direccions.usuarios_id')
        ->select()
        ->where('usuarios_id', $id);
        dd($usuario);*/
        return view('wlusers.edit', compact('usuario'));
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
