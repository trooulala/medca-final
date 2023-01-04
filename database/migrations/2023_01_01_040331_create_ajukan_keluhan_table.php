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
        Schema::create('ajukan_keluhan', function (Blueprint $table) {
            $table->id('Tiket_Keluhan', 12);
            $table->bigInteger('id_user')->unsigned()->index();
            $table->bigInteger('id_dok')->unsigned()->index();
            $table->string('Email_Pasien', 255);
            $table->string('Nama_Pasien', 255);
            $table->string('Email_Dokter', 255);
            $table->string('Nama_Dokter', 255);
            $table->string('Keluhan', 1000);
            $table->timestamps();
            $table->foreign('id_user')->references('AccountID')->on('user');
            $table->foreign('id_dok')->references('Dokter_ID')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajukan_keluhan');
    }
};
