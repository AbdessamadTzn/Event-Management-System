<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $req){
        $req->validate([
            'name' => 'required|string|max:255',
            'email'=>'required|string|max:255',
            'password'=>'required|string|max:255',
        ]);

        //Create new User
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password')); // Hash the password

        $user->save();

        return redirect('/users');
    }

    public function update($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
}
