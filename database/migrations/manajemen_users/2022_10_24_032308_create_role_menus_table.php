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
    // public function up()
    // {
    //     Schema::create('role_menus', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });

    //     Schema::table('role_menus', function (Blueprint $table) {
    //         $table->unsignedBigInteger('role_id');
    //         $table->unsignedBigInteger('menu_id');
    //         $table->foreign('menu_id')->references('id')->on('menus');
    //         $table->foreign('role_id')->references('id')->on('roles');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_menus');
    }
};
