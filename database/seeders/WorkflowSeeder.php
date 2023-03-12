<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workflow;

class WorkflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workflow::create([
            "sort" => 1,
            "nama_aksi" => "Permohonan Di Proses Penerima",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 2,
            "nama_aksi" => " Approval Manager",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 3,
            "nama_aksi" => "Menunggu Approval Manager",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 4,
            "nama_aksi" => "Menunggu Approval Penyelia",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 5,
            "nama_aksi" => "Menunggu Approval Penguji",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 6,
            "nama_aksi" => "Input Hasil Uji Penyelia ",
            "label" => "lanjutkan"
        ]);
        Workflow::create([
            "sort" => 7,
            "nama_aksi" => "Setujui Permohonan ",
            "label" => "lanjutkan"
        ]);
    }
}
