<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        return view('users.usuarios',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
        ]);

       if($request->hasFile('avatar')){
           $file = $request->file('avatar');
           $name = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/',$name);
       }
        $user = new User();
        $user->name = $request['name'];
        $user->documento = $request['documento'];
        $user->telefono = $request['telefono'];
        $user->direccion = $request['direccion'];
        $user->genero = $request['genero'];
        $user->pais = $request['pais'];
        $user->avatar = $name;
        $user->ciudad = $request['ciudad'];
        $user->fecha = $request['fecha'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        /*$user = User::create([
            'name' => $request['name'],
            'documento' => $request['documento'],
            'telefono' => $request['telefono'],
            'direccion' => $request['direccion'],
            'genero' => $request['genero'],
            'pais' => $request['pais'],
            'ciudad' => $request['ciudad'],
            'fecha' => $request['fecha'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);*/
        return redirect()->route('user.index')->with('success','Usuario Creado Correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',['id'=>$user,]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('/usuario')->with('success','Usuario Modificado Correctamente');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
