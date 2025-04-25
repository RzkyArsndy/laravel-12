<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('petugasgizi', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp')->nullable();
            $table->string('namaLengkap');
            $table->string('namaSekolah')->nullable();
            $table->string('NamaKelas');
            $table->float('BeratBadan');
            $table->float('TinggiBadan');
            $table->float('IMT');
            $table->string('deskripsiIMTmurid');
            $table->string('TBU');
            $table->string('tandaAnemia');
            $table->enum('DirujukGizi', ['Y', 'N']);
            $table->string('RujukanGizi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petugasgizi');
    }
};
