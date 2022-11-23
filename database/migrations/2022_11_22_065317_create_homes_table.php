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


        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('judul')->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('urutan');
            $table->timestamps();
        });

        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('judul');
            $table->string('deskripsi');
            $table->integer('urutan');
            $table->timestamps();
        });

        Schema::create('informasis_image', function (Blueprint $table) {
            $table->id();
            $table->string('sideimage_path');
            $table->string('backgroundimage_path');
            $table->timestamps();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('deskripsi')->nullable();
            $table->integer('urutan');
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
        Schema::dropIfExists('sliders');
        Schema::dropIfExists('informasis');
        Schema::dropIfExists('informasis_image');
        Schema::dropIfExists('videos');
    }
};
