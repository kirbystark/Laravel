<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Register Page
    function showRegister(): \Illuminate\View\View
    {
        return view('authentication.register');
    }

    // Register Function
    function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:100|unique:users',
            'password' => [
                'required',
                'min:6',
                'confirmed',
                'regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/'
            ],
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login.form')
            ->with('success', 'Registration Successful!');
    }

    // Show Login Page
    function showLogin(): \Illuminate\View\View
    {
        return view('authentication.login');
    }

    // Login Function
    function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email/password!',
        ]);
    }
}
