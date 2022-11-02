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
        //Menu
        Schema::create('ppid_menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('routing');
            $table->integer('order');
            $table->timestamps();
        });

        //profil
        Schema::create('ppid_jenis_profil', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_profil');
            $table->timestamps();
        });

        Schema::create('ppid_profil', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('narasi');
            $table->string('direktori_image');
            $table->timestamps();
        });
        Schema::table('ppid_profil', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');

            $table->integer('id_ppid_jenis_profil')->unsigned()->nullable();
            $table->foreign('id_ppid_jenis_profil')->references('id')->on('ppid_jenis_profil');
        });

        //kontak
        Schema::create('ppid_kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_data');
            $table->string('deskripsi');
            $table->string('sisi');
            $table->timestamps();
        });
        Schema::table('ppid_kontak', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });


        //Laporan
        // ppid_lap_th
        Schema::create('ppid_lap_th', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('direktori_file');
            $table->integer('order');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_lap_th', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        // ppid_lap_tw
        Schema::create('ppid_lap_tw', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('direktori_file');
            $table->integer('order');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_lap_tw', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        // laporan_berkala
        Schema::create('laporan_berkala', function (Blueprint $table) {
            $table->id();
            $table->string('nama_laporan');
            $table->string('support_link');
            $table->integer('deskripsi');
            $table->timestamps();
        });
        Schema::table('laporan_berkala', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        // laporan_serta_merta
        Schema::create('laporan_serta_merta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_laporan');
            $table->string('support_link');
            $table->integer('deskripsi');
            $table->timestamps();
        });
        Schema::table('laporan_serta_merta', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        // laporan_setiap_saat
        Schema::create('laporan_setiap_saat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_laporan');
            $table->string('support_link');
            $table->integer('deskripsi');
            $table->timestamps();
        });
        Schema::table('laporan_setiap_saat', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        // laporan_survei
        Schema::create('ppid_lap_survey', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('direktori_file');
            $table->integer('order');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_lap_survey', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        //FAQ
        //ppid_faq
        Schema::create('ppid_faq', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi');
            $table->integer('order');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_faq', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        //ppid_maklumat
        Schema::create('ppid_maklumat', function (Blueprint $table) {
            $table->id();
            $table->string('direktori_image');
            $table->string('deskripsi');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_maklumat', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        //ppid_infografis
        Schema::create('ppid_infografis', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->string('direktori_image');
            $table->integer('order');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_infografis', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        //ppid_biaya
        Schema::create('ppid_biaya', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->boolean('is_active');
            $table->timestamps();
        });
        Schema::table('ppid_biaya', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');
        });

        //regulasi
        Schema::create('ppid_regulasi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_regulasi');
            $table->timestamps();
        });

        Schema::create('ppid_regulasi_peraturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_regulasi');
            $table->string('direktori_file');
            $table->integer('order');
            $table->timestamps();
        });
        Schema::table('ppid_regulasi_peraturan', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('ppid_menu');

            $table->integer('id_jenis_regulasi')->unsigned()->nullable();
            $table->foreign('id_jenis_regulasi')->references('id')->on('ppid_regulasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('frontends');
    }
};
