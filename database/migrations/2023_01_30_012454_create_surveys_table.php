<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
             //Step 1
             $table->string('jenisKelamin' );
             $table->string('usia');
             $table->string('pendidikan');
             $table->string('pekerjaan');
             $table->string('tujuan');
             $table->string('mediapengajuan');
             //Step 2
             $table->string('prosedurpelayanan');
             $table->string('kualitaspelayanan');
             $table->string('kelengkapandata');
             $table->string('tingkatresponsif');
             $table->string('fasilitaspelayanan');
             $table->string('pelayananinformasi');
             $table->string('kecakapanpetugas');
             $table->string('kompetensipetugas');
             //Step 3
             $table->string('informasidisajikan');
             $table->string('informasiuptodate');
             $table->string('aksesibilitasinformasi');
             //Step 4
             $table->string('keseluruhanproses' );
             $table->string('skorpelaksanaan');
             $table->string('saranmasukan');
            //identitas
            $table->string('id_surat');
            $table->string('no_tiket');
            $table->string('id_ppid_pendaftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};
