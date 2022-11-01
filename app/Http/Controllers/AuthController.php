<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
    function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        // $user = User::create([
        //     'name' => $validated['name'],
        //     'nim' => $validated['nim'],
        //     'username' => $validated['username'],
        //     'email' => $validated['email'],
        //     'password' => Hash::make($validated['password'])
        // ]);

        $file = $validated['foto'];

        die();

    }

    function login(LoginRequest $request)
    {
        
    }
}
