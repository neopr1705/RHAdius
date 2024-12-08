<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Menampilkan halaman utama.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');  // Mengembalikan tampilan 'home'
    }
}
