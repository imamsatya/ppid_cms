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
        Schema::create('profilsingkats', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->string('banner_path')->nullable();
            $table->string('side_image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('tugasdanfungsis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->string('banner_path');
            $table->string('side_image_path');
            $table->timestamps();
        });

        //Struktur Organisasi
        Schema::create('strukturorganisasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('banner_path');
            $table->timestamps();
        });

        Schema::create('strukturorganisasis_bagiankiri', function (Blueprint $table) {
            $table->id();
            $table->string('nomenklatur');
            $table->timestamps();
        });

        Schema::create('strukturorganisasis_bagiankanan', function (Blueprint $table) {
            $table->id();
            $table->string('nomenklatur');
            $table->text('deskripsi');
            $table->integer('urutan');
            $table->timestamps();
        });

        //VisiMisi
        Schema::create('visimisis', function (Blueprint $table) {
            $table->id();
            $table->text('visi');
            $table->text('misi');
            $table->string('banner_path');
            $table->timestamps();
        });

        //Kontak
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('telepon');
            $table->text('waktu_pekayanan');
            $table->string('banner_path');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        Schema::create('kontaks_dokumentasiruangppid', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('keterangan');
            $table->integer('urutan');
            $table->timestamps();
        });


        //Sosial Media
        Schema::create('sosialmedias', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('url');
            $table->integer('urutan');
            $table->timestamps();
        });

        Schema::create('sosialmedias_linkapps', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('url');
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
        Schema::dropIfExists('profilsingkats');
        Schema::dropIfExists('tugasdanfungsis');
        Schema::dropIfExists('strukturorganisasis');
        Schema::dropIfExists('strukturorganisasis_bagiankiri');
        Schema::dropIfExists('strukturorganisasis_bagiankanan');
        Schema::dropIfExists('visimisis');
        Schema::dropIfExists('kontaks');
        Schema::dropIfExists('kontaks_dokumentasiruangppid');
        Schema::dropIfExists('sosialmedias');
        Schema::dropIfExists('sosialmedias_linkapps');
    }
};
