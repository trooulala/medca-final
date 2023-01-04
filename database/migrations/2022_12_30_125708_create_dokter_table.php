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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id('Dokter_ID', 12);
            $table->bigInteger('id_rs')->unsigned()->index();
            $table->string('Name_Dok', 255);
            $table->string('NIP', 20);
            $table->string('Spesialisasi', 255);
            $table->string('Tempat_RS', 255);
            $table->float('Rating', 8);
            $table->string('Foto_Dok');
            $table->string('Email_Dok');
            $table->string('Pass_Dok');
            $table->string('Email_AdminRS', 25);
            $table->foreign('id_rs')->references('RS_ID')->on('rumahsakit');
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
        Schema::dropIfExists('dokter');
    }
};
