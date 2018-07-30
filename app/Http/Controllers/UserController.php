<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $user = User::create([
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
        ]);
        return redirect()->route('user.index')->with('success','Usuario Creado Correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
