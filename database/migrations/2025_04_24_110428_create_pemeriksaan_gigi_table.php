<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pemeriksaan_gigi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_sekolah')->nullable();
            $table->string('kelas');
            $table->enum('celah_bibir', ['Y', 'N']);
            $table->enum('sudut_mulut', ['Y', 'N']);
            $table->enum('sariawan', ['Y', 'N']);
            $table->enum('lidah_kotor', ['Y', 'N']);
            $table->enum('luka_lainnya', ['Y', 'N']);
            $table->enum('gigi_berlubang', ['Y', 'N']);
            $table->enum('gusi_berdarah', ['Y', 'N']);
            $table->enum('gusi_bengkak', ['Y', 'N']);
            $table->enum('gigi_kotor', ['Y', 'N']);
            $table->enum('karang_gigi', ['Y', 'N']);
            $table->enum('susunan_gigi', ['Y', 'N']);
            $table->enum('penglihatan', ['Y', 'N']);
            $table->enum('pendengaran', ['Y', 'N']);
            $table->enum('kursi_roda', ['Y', 'N']);
            $table->enum('tongkat', ['Y', 'N']);
            $table->enum('prostese', ['Y', 'N']);
            $table->enum('dirujuk_fasyankes', ['Y', 'N']);
            $table->string('rujukan_gizi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeriksaan_gigi');
    }
};
