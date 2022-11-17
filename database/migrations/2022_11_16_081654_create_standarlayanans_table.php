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
        Schema::create('standarlayanans_maklumat', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('standarlayanans_prosedurlayanan', function (Blueprint $table) {
            $table->id();
            $table->string('prosedur_permohonan_informasi_image_path')->nullable();
            $table->string('prosedur_keberatan_informasi_image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('standarlayanans_biayalayanan', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('standarlayanans_maklumat');
        Schema::dropIfExists('standarlayanans_prosedurlayanan');
        Schema::dropIfExists('standarlayanans_biayalayanan');
    }
};
