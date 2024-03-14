<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsoAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('cso.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/cso/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('cso.login');
    }
}