<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function showDashboard()
    {
        return view('expert.dashboard');
    }
}
