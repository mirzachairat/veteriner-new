<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_harga', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_lab');
            $table->string('jenis_pengujian');
            $table->string('satuan');
            $table->integer('tarif');
            $table->string('lama_pengujian');
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
        Schema::dropIfExists('jenis_harga');
    }
}
