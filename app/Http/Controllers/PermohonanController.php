<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Dokumen;
use App\Models\Progres;

use Illuminate\Support\Facades\Auth;


class PermohonanController extends Controller
{
    public function tambah(Request $request)
    {
        $permohonan = Permohonan::create([
            'users_id' => Auth::user()->id,
            'no_hp' => Auth::user()->no_hp,
            'nama' => Auth::user()->nama,
            'jenis_hewan' => $request->jenis_hewan,
        ]);

        foreach ($request->jenis_sampel as $index => $item) {
            $data_jenis = Jenis_sampel::create([
                'permohonan_id' => $permohonan->id,
                'jenis_sampel' => $request->jenis_sampel[$index],
                'jenis_pengujian' => $request->jenis_pengujian[$index],
                'jumlah_contoh' => $request->jumlah_contoh[$index],
                'harga_satuan' => $request->harga_satuan[$index],
                'total_harga' => $request->total_harga[$index],
            ]);
        }
        $progress = Progres::create([
            "permohonan_id" => $permohonan->id,
            "workflow_id" => 1,
            "status" => 0
        ]);

        return redirect()->back();
    }
}