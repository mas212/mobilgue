<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->double('harga');
            $table->text('ringkasan')->nullable();
            $table->string('photo')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->integer('subcat_id')->unsigned()->nullable();
            $table->foreign('subcat_id')->references('id')->on('subkategoris');
            $table->string('tahun')->nullable();
            $table->string('merek')->nullable();
            $table->string('jarak')->nullable();
            $table->string('warna')->nullable();
            $table->enum('status_jual', ['terjual', 'ada'])->default('ada');
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
        Schema::dropIfExists('products');
    }
}
