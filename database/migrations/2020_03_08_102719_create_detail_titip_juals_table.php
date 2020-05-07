<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTitipJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_titip_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jam_pertemuan');
            $table->string('nama_lengkap');
            $table->string('email')->nullable();
            $table->string('alamat_lengkap');
            $table->string('pemilik_kendaraan');
            $table->string('iklan');
            $table->integer('titip_id')->unsigned()->nullable();
            $table->foreign('titip_id')->references('id')->on('titip_juals');
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
        Schema::dropIfExists('detail_titip_juals');
    }
}
