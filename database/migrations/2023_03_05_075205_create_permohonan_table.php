<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->string('jenis_hewan');
            $table->string('no_epi')->nullable();
            $table->date('tgl_terima')->nullable();
            $table->date('tgl_diserahkan_mt')->nullable();
            $table->double('jumlah', 12, 2)->nullable();
            $table->string('saran')->nullable();
            $table->string('kesimpulan')->nullable();
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
        Schema::dropIfExists('permohonan');
    }
}