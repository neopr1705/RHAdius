<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    // Fungsi untuk halaman Potensi Masalah Kesehatan
    public function potensiMasalahKesehatan()
    {
        return view('materi.potensi');
    }

    // Fungsi untuk halaman Respon Edukasi Siaga
    public function responEdukasiSiaga()
    {
        return view('materi.respon');
    }

    // Fungsi untuk halaman Edukasi Siaga Bencana
    public function edukasiSiagaBencana()
    {
        return view('materi.bencana');
        return view('materi.potensi');
        return view('materi.respon');
    }
}
