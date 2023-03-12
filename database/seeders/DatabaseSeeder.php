<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([PermohonanSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([Jenis_hargaSeeder::class]);
        $this->call([JabatanSeeder::class]);
        $this->call([DokumenSeeder::class]);
        $this->call([WorkflowSeeder::class]);
    }
}