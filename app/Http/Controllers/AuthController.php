<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Traits\FileTrait;

class AuthController extends Controller
{
    use FileTrait;

    function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $foto = $this->uploadFile($validated['foto']);

        $user = User::create([
            'name' => $validated['name'],
            'nim' => $validated['nim'],
            'foto' => $foto,
            'username' => $validated['username'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect('/login');
    }

    function login(LoginRequest $request)
    {
        $request->authenticate();
        
        $request->session()->regenerate();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
