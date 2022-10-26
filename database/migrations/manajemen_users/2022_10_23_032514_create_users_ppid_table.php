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
        Schema::create('users_ppid', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('handphone'); //harusnya varchar 16
            $table->integer('activated');
            $table->integer('kategori_user_id');
            $table->string('source');
            $table->string('id_bumn'); //varchar 20
            $table->string('asal_instansi');
            $table->string('id_angka');
            $table->string('id_huruf');
            $table->string('bumn_lengkap');
            $table->string('bumn_singkat');
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
        Schema::dropIfExists('users_ppid');
    }
};
