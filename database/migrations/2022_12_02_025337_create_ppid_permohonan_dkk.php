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
        Schema::create('ppid_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_pendaftar');
            $table->foreign('id_ppid_pendaftar')->references('id')->on('ppid_pendaftar');
            $table->string('ticket_permohonan');
            $table->string('jenis_kanal');
            $table->text('informasi_diminta');
            $table->text('tujuan_informasi');
            $table->unsignedBigInteger('id_cara');
            $table->foreign('id_cara')->references('id')->on('ppid_memberikan');
            $table->unsignedBigInteger('id_mendapatkan');
            $table->foreign('id_mendapatkan')->references('id')->on('ppid_mendapatkan');
            $table->string('file_identitas');
            $table->date('expired_date1')->nullable();
            $table->date('expired_date2')->nullable();
            $table->timestamps();
        });

        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('status_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_permohonan');
            $table->foreign('id_ppid_permohonan')->references('id')->on('ppid_permohonan');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status');
            $table->string('modified_by');
            $table->dateTime('modified_date');
            $table->boolean('aktif');
            $table->timestamps();
        });

        Schema::create('forward_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_permohonan');
            $table->foreign('id_ppid_permohonan')->references('id')->on('ppid_permohonan');
            $table->string('forward_by');
            $table->string('forward_to');
            $table->string('keterangan');
            $table->string('nota_dinas');
            $table->timestamps();
        });

        Schema::create('log_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_permohonan');
            $table->foreign('id_ppid_permohonan')->references('id')->on('ppid_permohonan');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('jawab_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_permohonan');
            $table->foreign('id_ppid_permohonan')->references('id')->on('ppid_permohonan');
            $table->text('ket_jawaban');
            $table->string('file_jawaban')->nullable();
            $table->string('jawab_by');
            $table->string('ket_jawaban_path');
            $table->timestamps();
        });

        Schema::create('template_reject', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('reject_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ppid_permohonan');
            $table->foreign('id_ppid_permohonan')->references('id')->on('ppid_permohonan');
            $table->unsignedBigInteger('id_template_reject');
            $table->foreign('id_template_reject')->references('id')->on('template_reject');
            $table->string('file');
            $table->string('rejected_by');
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
        Schema::dropIfExists('ppid_permohonan');
    }
};
