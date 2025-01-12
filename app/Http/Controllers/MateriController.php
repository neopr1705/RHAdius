<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    // Fungsi untuk halaman Potensi Masalah Kesehatan
    public function PraBanjir()
    {
        return view('materi.potensi');
    }

    // Fungsi untuk halaman Respon Edukasi Siaga
    public function SaatBanjir()
    {
        return view('materi.respon');
    }

    // Fungsi untuk halaman Edukasi Siaga Bencana
    public function PascaBanjir()
    {
        return view('materi.bencana');
    }

    public function SiapSiaga(){
        return view('materi.siaga');
    }

    public function PotensiBencana(){
        return view('materi.potensibencana');
    }
    public function ResponBencana(){
        return view('materi.responbencana');
    }
}
