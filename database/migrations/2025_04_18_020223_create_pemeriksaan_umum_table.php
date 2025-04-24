<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanUmumTable extends Migration
{
    public function up()
    {
        Schema::create('pemeriksaan_umum', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('sekolah_id')->constrained('sekolah'); 
            $table->string('kelas');
            $table->string('tekanan_darah');
            $table->string('denyut_nadi');
            $table->string('frekuensi_pernapasan');
            $table->string('suhu');
            $table->string('bising_jantung');
            $table->string('bising_paru');
            $table->string('keadaan_rambut');
            $table->enum('bercak_keputihan', ['Y', 'N']);
            $table->string('bercak_putih_mati_rasa')->nullable();
            $table->enum('kulit_bersisik', ['Y', 'N']);
            $table->enum('kulit_ada_memar', ['Y', 'N']);
            $table->enum('kulit_ada_luka_sayatan', ['Y', 'N']);
            $table->enum('kulit_ada_luka_koreng', ['Y', 'N']);
            $table->enum('luka_koreng_sukar_sembuh', ['Y', 'N']);
            $table->enum('bekas_suntikan', ['Y', 'N']);
            $table->string('resiko_merokok');
            $table->string('telinga_luar');
            $table->string('sarapan');
            $table->string('kondisi_kuku');
            $table->enum('dirujuk_ke_fasyankes', ['Y', 'N']);
            $table->string('keterangan_rujukan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeriksaan_umum');
    }
}
