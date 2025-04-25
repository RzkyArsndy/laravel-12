<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanmataTable extends Migration
{
    public function up()
    {
        Schema::create('pemeriksaanmata', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('namaSekolah')->nullable();
            $table->string('kelas');
            $table->string('kondisiMataLuar');
            $table->string('tajamPengelihatan');
            $table->enum('Berkacamata', ['Y', 'N']);
            $table->enum('ButaWarna', ['Y', 'N']);
            $table->enum('RujukFasyankesMata', ['Y', 'N']);
            $table->string('keteranganRujukanMata');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeriksaanmata');
    }
}
