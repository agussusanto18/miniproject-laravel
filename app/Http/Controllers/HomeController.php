<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $user = Auth::user();
        return view('index', ['user' => $user]);
    }
}
