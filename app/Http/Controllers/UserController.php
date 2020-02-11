<?php

namespace App\Http\Controllers;

use App\User;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\CorreoPonente;
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
        return view("usuario.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'type'=>'required',
            'password'=>'required'
        ]);
        
        $unhashed_pw = $request['password'];
        
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => $request['type'],
            'password' => Hash::make($request['password'])
        ]);
        
        $user->password = $unhashed_pw;
        $correo = $request->input('email');
        Mail::to($correo)->send(new CorreoPonente($user));

        return redirect()->route('usuario.index');
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
