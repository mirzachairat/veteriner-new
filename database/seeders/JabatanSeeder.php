<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Jabatan = Jabatan::create([
            'jabatan_id' => 1,
            'type' => 'pemohon'
        ]);
        $Jabatan = Jabatan::create([
            'jabatan_id' => 2,
            'type' => 'penerima',
        ]);
        $Jabatan = Jabatan::create([
            'jabatan_id' => 3,
            'type' => 'manager',
        ]);
        $Jabatan = Jabatan::create([
            'jabatan_id' => 4,
            'type' => 'penyelia',
        ]);
        $Jabatan = Jabatan::create([
            'jabatan_id' => 5,
            'type' => 'penguji',
        ]);
        $Jabatan = Jabatan::create([
            'jabatan_id' => 6,
            'type' => 'admin',
        ]);
    }
}