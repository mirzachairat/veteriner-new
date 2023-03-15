<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Progres;

class PermohonanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Permohonan = Permohonan::create([
            "users_id" => "1",
            "jenis_hewan" => "kambing"
        ]);
        $Sampel = Jenis_sampel::create([
            "permohonan_id" => $Permohonan->id,
            "jenis_sampel" => "daging",
            "jenis_pengujian" => 1,
            "jumlah_contoh" => 2,
            "harga_satuan" => 20000,
            "total_harga" => 40000,
            "bahan_pengawet" => "",
            "kondisi" => "",
            "kriteria" => ""
        ]);
        Progres::create([
            "permohonan_id" => $Permohonan->id,
            "workflow_id" => 1,
            "status" => 0
        ]);
    }
}