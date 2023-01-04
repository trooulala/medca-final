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
        Schema::create('artikel', function (Blueprint $table) {
            $table->id('Article_ID', 12);
            $table->bigInteger('id_user')->unsigned()->index();
            $table->string('Judul', 255);
            $table->string('Kategori', 100);
            $table->string('Cover_Article');
            $table->longtext('Paragraf');
            $table->string('Email_AdmArticle');
            $table->foreign('id_user')->references('AccountID')->on('user');
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
        Schema::dropIfExists('artikel');
    }
};
