<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    function showRegister(){return view("authentication.register");}

Function register(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|max:100|unique:users',
        'password'=> 'required|min:5|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
    ]);

    User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password' => hash::make($request->password)
    ]);
    return redirect('login.form')->with('success','Registration Successful!');

}
function showLogin() {return view('authentication.loginj'); }
}