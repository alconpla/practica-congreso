<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("usuario.index")->with(['users' => $users]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);   
        return view("usuario.edit")->with(['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        
        $user = User::find($id);
        
        $user->type = $request['type'];
        $user->save();
        return view("usuario.index")->with(['users' => User::all()]);
    }
    

    public function destroy(User $user)
    {
        //
    }
}
