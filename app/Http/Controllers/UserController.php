<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{

    public function index()
    {
        return view('users.index')->with('users', User::all());
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->dni = $request->dni;
        $user->type = $request->type;
        $user->save();
        return redirect('/usuarios');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user',$user);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->type = $request->type;
        $user->save();
        return redirect('/usuarios');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/usuarios');
    }
}
