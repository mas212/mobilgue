<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitipJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titip_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merek_id')->unsigned()->nullable();
            $table->foreign('merek_id')->references('id')->on('merks');
            $table->integer('subkategori_id')->unsigned()->nullable();
            $table->foreign('subkategori_id')->references('id')->on('subkategoris');
            $table->integer('tahun_id')->unsigned()->nullable();
            $table->foreign('tahun_id')->references('id')->on('tahun_produksis');
            $table->integer('transmisi_id')->unsigned()->nullable();
            $table->foreign('transmisi_id')->references('id')->on('transmisis');
            $table->string('lokasi');
            $table->string('nomor_telpn');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('titip_juals');
    }
}
