<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponTable extends Migration
{
    public function up()
    {
        Schema::create('respon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kuesioner_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->text('jawaban');
            $table->timestamp('dibuat_pada')->useCurrent();
            $table->foreign('kuesioner_id')->references('id')->on('kuesioner');
            $table->foreign('pengguna_id')->references('id')->on('pengguna');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respon');
    }
}
