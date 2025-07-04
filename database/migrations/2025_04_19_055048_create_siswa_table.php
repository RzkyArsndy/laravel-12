<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10)->unique()->after('id');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->foreignId('sekolah_id')->constrained('sekolah'); // Sesuaikan jika nama tabel sekolah berbeda
            $table->string('tempat_lahir');
            $table->string('kelas');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
