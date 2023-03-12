<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokumen;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokumen::create([
            'jabatan_id' => 1,
            'nama_dokumen' => "Formulir 7F1",
        ]);
        Dokumen::create([
            'jabatan_id' => 1,
            'nama_dokumen' => "Invoice",
        ]);
        Dokumen::create([
            'jabatan_id' => 2,
            'nama_dokumen' => "Formulir 7F2",
        ]);
        Dokumen::create([
            'jabatan_id' => 3,
            'nama_dokumen' => "Formulir 7F3",
        ]);
        Dokumen::create([
            'jabatan_id' => 4,
            'nama_dokumen' => "Formulir 7F6",
        ]);
    }
}