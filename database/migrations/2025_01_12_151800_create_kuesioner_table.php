<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionerTable extends Migration
{
    public function up()
    {
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan');
            $table->enum('tipe_pertanyaan', ['pilihan_tunggal', 'pilihan_ganda', 'penilaian']);
            $table->unsignedBigInteger('dibuat_oleh');
            $table->timestamp('dibuat_pada')->useCurrent();
            $table->foreign('dibuat_oleh')->references('id')->on('pengguna');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuesioner');
    }
}
