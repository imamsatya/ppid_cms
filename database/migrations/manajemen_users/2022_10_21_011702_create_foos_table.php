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
        Schema::create('foos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('foos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('custom_id');
            $table->text('comment');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('custom_id')->references('id')->on('customs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foos');
    }
};
