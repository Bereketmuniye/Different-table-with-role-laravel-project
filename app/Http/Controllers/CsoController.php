<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsoController extends Controller
{
    public function showLoginForm()
    {
        return view('cso.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('civil')->attempt($credentials)) {
            // Authentication passed, redirect to CSO dashboard
            return redirect()->route('cso.dashboard');
        }

        // Authentication failed, redirect back to login page with errors
        return redirect()->route('cso.login')->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    public function showDashboard()
    {
        return view('cso.dashboard');
    }
}
