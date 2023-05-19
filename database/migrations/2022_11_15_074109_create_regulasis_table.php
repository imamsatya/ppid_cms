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
        Schema::create('regulasis_banner', function (Blueprint $table) {
            $table->id();
            $table->string('banner_path')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->timestamps();
        });

        Schema::create('regulasis_peraturankip', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->text('judul_peraturan');
=======
            $table->string('judul_peraturan');
>>>>>>> origin/main
            $table->string('file_path');
            $table->integer('urutan');
            $table->timestamps();
        });

        Schema::create('regulasis_rancanganperaturankip', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->text('judul_peraturan');
=======
            $table->string('judul_peraturan');
>>>>>>> origin/main
            $table->string('file_path');
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
        Schema::dropIfExists('regulasis_banner');
        Schema::dropIfExists('regulasis_peraturankip');
        Schema::dropIfExists('regulasis_rancanganperaturankip');
    }
};
