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
}
