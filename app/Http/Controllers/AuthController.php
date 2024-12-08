<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi form login
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah username dan password cocok (sederhana)
        if ($validated['username'] == 'admin' && $validated['password'] == 'admin') {
            // Set session atau lakukan login
            return redirect('/')->with('success', ' ');
        }

        return back()->withErrors(['username' => 'Username atau password salah!']);
    }
}

