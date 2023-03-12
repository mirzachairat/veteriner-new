<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenis_harga;

class Jenis_hargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Jenis_harga = Jenis_harga::create([
            'jenis_lab' => 'kesmavet',
            'jenis_pengujian' => "Uji Coliform",
            'satuan' => "per sampel",
            'tarif' => 50000,
            'lama_pengujian' => "2-3"
        ]);
        $Jenis_harga = Jenis_harga::create([
            'jenis_lab' => 'kesmavet',
            'jenis_pengujian' => "Uji E.coli",
            'satuan' => "per sampel",
            'tarif' => 90000,
            'lama_pengujian' => "2-3"
        ]);
        $Jenis_harga = Jenis_harga::create([
            'jenis_lab' => 'kesmavet',
            'jenis_pengujian' => "Uji E.Boraks",
            'satuan' => "per sampel",
            'tarif' => 60000,
            'lama_pengujian' => "2-3"
        ]);
    }
}
