<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\WlUserCreate;
use App\Http\Requests\WlUserEditCreate;

class WlUserController extends Controller
{
    public function index(){
        $usuarios=User::where("name","<>",'user')->paginate(6);
        //$usuarios= User::orderBy('id','ASC')->paginate(5);
        return view('super.wlUsers', compact('usuarios'))
            ->with('i',(request()->input('page',1)-1)*6);
        //return view('super.wlUsers');
    }

    public function wluserCreate(){
        return view('super.addWlUser');
    }
    public function wluserAdd(WlUserCreate $request)
    {
        
        //Insert users
        $users = new User;
        $users ->name= $request->areas;
        $users ->email= $request->email;
        $users ->password= encrypt($request->password);
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
    public function wluserEdit($id)
    {
        $usuario = User::find($id);
        //$users ->password= decrypt($request->password);
        
        $pass=decrypt($usuario->password);
        
        
        return view('super.editWlUser', compact('usuario','pass'));
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
        $usuario->name = $request->areas;
        $usuario->email = $request->email;
        $usuario ->password= encrypt($request->password);
        $usuario->save();


        return redirect()->route('wluser.index');

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

