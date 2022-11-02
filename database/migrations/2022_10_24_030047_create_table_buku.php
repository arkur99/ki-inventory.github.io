<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->integer('nobuku');
            $table->string('Judul','35');
            $table->unsignedBigInteger('idkategori');
            $table->date('thnbuku');
            $table->string('deskrips','50');
            $table->string('nmpenerbit','15');
            $table->integer('stok');
            $table->timestamps();
            $table->foreign('idkategori')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_buku');
    }
}
