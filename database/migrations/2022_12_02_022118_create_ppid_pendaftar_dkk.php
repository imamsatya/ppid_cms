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
        Schema::create('jenis_identitas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('jenis_pemohon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('ppid_pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->unsignedBigInteger('jenis_pemohon');
            $table->foreign('jenis_pemohon')->references('id')->on('jenis_pemohon');
            $table->unsignedBigInteger('jenis_identitas');
            $table->foreign('jenis_identitas')->references('id')->on('jenis_identitas');
            $table->string('nomor_identitas');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('npwp');
            $table->string('email');
            $table->string('password_login');
            $table->string('status');
            $table->string('identitas_file_path');
            $table->rememberToken();
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
        Schema::dropIfExists('ppid_pendaftar');
        Schema::dropIfExists('jenis_identitas');
        Schema::dropIfExists('jenis_pemohon');
    }
};
