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
        Schema::create('informasipubliks_banner', function (Blueprint $table) {
            $table->id();
            $table->string('banner_path')->nullable();
            $table->timestamps();
        });
        Schema::create('informasipubliks_secaraberkala', function (Blueprint $table) {
            $table->id();
            $table->string('judul_informasi');
            $table->string('url');
            $table->string('file_path')->nullable();
            $table->timestamps();
        });

        Schema::create('informasipubliks_sertamerta', function (Blueprint $table) {
            $table->id();
            $table->string('judul_informasi');
            $table->string('url');
            $table->string('file_path')->nullable();
            $table->timestamps();
        });

        Schema::create('informasipubliks_setiapsaat', function (Blueprint $table) {
            $table->id();
            $table->string('judul_informasi');
            $table->string('url');
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('informasipubliks_banner');
        Schema::dropIfExists('informasipubliks_secaraberkala');
        Schema::dropIfExists('informasipubliks_sertamerta');
        Schema::dropIfExists('informasipubliks_setiapsaat');
    }
};
