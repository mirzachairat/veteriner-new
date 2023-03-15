<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Progres;

class ManagerController extends Controller
{
    //menampilkan tabel pemohon yg blm di Approval
    public function index(){
        $data = Progres::with('permohonan')->where('status',1)->get();
        return view('pages.manager.manager', compact('data'));
    }


    //menampilkan tabel semua user yang telah di approval untuk di cetak dokumen pdf
    public function view_allform(){
        $data = Permohonan::with('jenis_sampel')->get();
        return view('pages.manager.detail_manager', compact('data'));
    }

    //Menampilkan 
    public function form_detail($id)
    {
        $data_detail = Permohonan::with('jenis_sampel')->where('id', $id)->get();
        $data_sample = Jenis_sampel::with('jenis_harga')->where('permohonan_id', $id)->get();
        return view('pages.manager.form_manager', compact(['data_detail','data_sample']));
    }

    public function update_jenis_sampel(Request $request){
        $data_a = Jenis_sampel::where('permohonan_id', $request->permohonan_id[0])->delete();
        $status_a = $request->status_delete;
        $data_a = Progres::where('status', $status_a)->delete();
        foreach ($request->permohonan_id as $index => $item) {
            $data_jenis = Jenis_sampel::create([
                'permohonan_id' => $request->permohonan_id[$index],
                'jenis_sampel' => $request->jenis_sampel[$index],
                'jenis_pengujian' => $request->jenis_pengujian[$index],
                'jumlah_contoh' => $request->jumlah_contoh[$index],
                'harga_satuan' => $request->harga_satuan[$index],
                'total_harga' => $request->total_harga[$index],
                'bahan_pengawet' => $request->bahan_pengawet[$index],
                 'kondisi' => $request->kondisi[$index],
                 'kriteria' => $request->kriteria[$index],
             ]);
         }
        
         $progress = Progres::create([
             "permohonan_id" => $request->permohonan_id[0],
             "workflow_id" => $request->workflow_id,
             "status" => $request->status
         ]);
 
         return redirect('/manager');
    }
}
