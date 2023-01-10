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
        Schema::create('kategori_keberatan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_keberatan');
            $table->timestamps();
        });

        Schema::create('ppid_keberatan', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_keberatan');
            $table->string('jenis_kanal');
            $table->text('perihal_keberatan');
            $table->unsignedBigInteger('id_kategori_keberatan');
            $table->foreign('id_kategori_keberatan')->references('id')->on('kategori_keberatan');
            $table->unsignedBigInteger('id_permohonan')->nullable();
            $table->foreign('id_permohonan')->references('id')->on('ppid_permohonan');
            $table->unsignedBigInteger('id_ppid_pendaftar');
            $table->foreign('id_ppid_pendaftar')->references('id')->on('ppid_pendaftar');
            $table->date('expired_date')->nullable();
            $table->timestamps();
        });

        Schema::create('jenis_status_keberatan', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('status_keberatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_keberatan');
            $table->foreign('id_ppid_keberatan')->references('id')->on('ppid_keberatan');
            $table->unsignedBigInteger('id_jenis_status_keberatan');
            $table->foreign('id_jenis_status_keberatan')->references('id')->on('jenis_status_keberatan');
            $table->string('modified_date')->nullable();
            $table->string('modified_by')->nullable();
            $table->timestamps();
        });

        Schema::create('proses_keberatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_keberatan');
            $table->foreign('id_ppid_keberatan')->references('id')->on('ppid_keberatan');
            $table->string('ket_jawaban');
            $table->string('ket_jawaban_path');
            $table->string('file_jawaban')->nullable();
            $table->string('jawab_by');
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
        Schema::dropIfExists('kategori_keberatan');
        Schema::dropIfExists('ppid_keberatan');
        Schema::dropIfExists('jenis_status_keberatan');
        Schema::dropIfExists('status_keberatan');
        Schema::dropIfExists('proses_keberatan');
    }
};
