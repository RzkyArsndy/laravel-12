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
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_sekolah')->nullable();
            $table->string('kelas');

            // Informasi Kesehatan Dasar
            $table->enum('alergi', ['Y', 'N'])->default('N');
            $table->string('detail_alergi')->nullable();
            $table->enum('cidera', ['Y', 'N'])->default('N');
            $table->string('detail_cidera')->nullable();
            $table->enum('kejang', ['Y', 'N'])->default('N');
            $table->enum('pingsan', ['Y', 'N'])->default('N');
            $table->enum('transfusi', ['Y', 'N'])->default('N');
            $table->enum('kelainan_bawaan', ['Y', 'N'])->default('N');
            $table->string('detail_kelainan')->nullable();
            $table->enum('penyakit_lain', ['Y', 'N'])->default('N');
            $table->string('detail_penyakit_lainnya')->nullable();
            $table->enum('imunisasi_dasar', ['Y', 'N'])->default('N');
            $table->string('detail_imunisasi_dasar')->nullable();

            // Status Imunisasi
            $table->enum('hepatitis_b', ['Y', 'N'])->default('N');
            $table->enum('bcg', ['Y', 'N'])->default('N');
            $table->enum('polio1', ['Y', 'N'])->default('N');
            $table->enum('dpt_hb_hib1', ['Y', 'N'])->default('N');
            $table->enum('polio2', ['Y', 'N'])->default('N');
            $table->enum('polio3', ['Y', 'N'])->default('N');
            $table->enum('dpt_hb_hib3', ['Y', 'N'])->default('N');
            $table->enum('polio4', ['Y', 'N'])->default('N');
            $table->enum('ipv', ['Y', 'N'])->default('N');
            $table->enum('campak_mr_9bulan', ['Y', 'N'])->default('N');
            $table->enum('dpt_hb_hib_18bulan', ['Y', 'N'])->default('N');
            $table->enum('campak_18bulan', ['Y', 'N'])->default('N');
            $table->enum('campak_kelas1', ['Y', 'N'])->default('N');
            $table->enum('dt_kelas1', ['Y', 'N'])->default('N');
            $table->enum('td_kelas5', ['Y', 'N'])->default('N');

            // Riwayat Keluarga
            $table->string('keluarga_tbc')->nullable();
            $table->string('keluarga_diabetes')->nullable();
            $table->string('keluarga_hepatitis')->nullable();
            $table->string('keluarga_asma')->nullable();
            $table->string('keluarga_penyakit_lain')->nullable();

            // Pola Hidup
            $table->enum('sarapan', ['Y', 'N'])->default('N');
            $table->enum('jajan_sekolah', ['Y', 'N'])->default('N');
            $table->string('resiko_merokok')->nullable();
            $table->enum('alkohol_napza', ['Y', 'N'])->default('N');

            // Kesehatan Reproduksi
            $table->string('masalah_pubertas')->nullable();
            $table->string('resiko_ims')->nullable();
            $table->string('resiko_kekerasan_seksual')->nullable();
            $table->string('gangguan_menstruasi')->nullable();

            // Kesehatan Mental
            $table->string('gejala_emosional')->nullable();
            $table->string('masalah_perilaku')->nullable();
            $table->string('hiperaktifitas')->nullable();
            $table->string('masalah_teman_sebaya')->nullable();
            $table->string('perilaku_prososial')->nullable();

            // Gaya Belajar
            $table->string('visual')->nullable();
            $table->string('audio')->nullable();
            $table->string('kinestetik')->nullable();
            $table->string('dominasi_otak')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner');
    }
};
