<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenEdukasiTable extends Migration
{
    public function up()
    {
        Schema::create('konten_edukasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten')->nullable();
            $table->enum('tipe', ['video', 'gambar', 'teks']);
            $table->enum('kategori', ['Potensi Masalah Kesehatan', 'Respons Edukasi Siaga', 'Edukasi Siaga Bencana']);
            $table->unsignedBigInteger('dibuat_oleh');
            $table->timestamp('dibuat_pada')->useCurrent();
            $table->foreign('dibuat_oleh')->references('id')->on('pengguna');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('konten_edukasi');
    }
}
