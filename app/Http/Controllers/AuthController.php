<?php
namespace App\Http\Controllers;

use App\Models\User;  // Pastikan Anda mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi form login
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah pengguna ada di database berdasarkan username atau email
        $user = User::where('email', $validated['username'])->orWhere('nama', $validated['username'])->first();

        if ($user && Hash::check($validated['password'], $user->password)) {

              // Set session untuk pesan sukses
        session()->flash('login_success', 'Login berhasil!');

            // Set session atau lakukan login
            Auth::login($user);
            // Melakukan login secara otomatis

                // Redirect ke halaman utama
        return redirect('/')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['username' => 'Username atau password salah!']);
    }
}
