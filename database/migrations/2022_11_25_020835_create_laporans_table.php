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
        Schema::create('laporans_banner', function (Blueprint $table) {
            $table->id();
            $table->string('banner_path')->nullable();
            $table->timestamps();
        });

        Schema::create('laporans_triwulanan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('file_path');
            $table->string('thumbnail_path');
            $table->timestamps();
        });

        Schema::create('laporans_tahunan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('file_path');
            $table->string('thumbnail_path');
            $table->timestamps();
        });

        Schema::create('laporans_hasil_survei', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('file_path');
            $table->string('thumbnail_path');
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
        Schema::dropIfExists('laporans');
    }
};
