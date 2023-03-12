<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permohonan_id');
            $table->string('jenis_sampel');
            $table->string('jenis_pengujian');
            $table->integer('jumlah_contoh');
            $table->integer('harga_satuan');
            $table->string('bahan_pengawet');
            $table->string('kondisi');
            $table->string('kriteria');
            $table->double('total_harga', 12, 2);
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
        Schema::dropIfExists('penerima');
    }
}
