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
        Schema::create('mainmenus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('routing')->nullable();
            $table->string('nama_permission')->nullable();
            $table->string('urutan');
            $table->timestamps();
        });

        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('routing');
            $table->string('nama_permission');
            $table->string('urutan');
            $table->timestamps();
        });

        Schema::table('submenus', function (Blueprint $table) {
            $table->integer('main_menu_id')->unsigned()->nullable();
            $table->foreign('main_menu_id')->references('id')->on('mainmenus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submenus');
        Schema::dropIfExists('mainmenus');
    }
};
