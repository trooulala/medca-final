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
        Schema::create('rumahsakit', function (Blueprint $table) {
            $table->id('RS_ID', 12);
            $table->string('Name_RS', 255);
            $table->string('Alamat_RS', 255);
            $table->string('Telpon_RS', 20);
            $table->string('Foto_RS')->nullable;
            $table->string('Deskripsi_RS', 1000);
            $table->string('Email_AdminRS', 25);
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
        Schema::dropIfExists('rumahsakit');
    }
};
