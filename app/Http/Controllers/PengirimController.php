<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_harga;
use Illuminate\Support\Facades\Session;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Auth;


class PengirimController extends Controller
{
    public function index()
    {
        // $data = Permohonan::with('jenis_sampel')->with('user')->where('users_id', auth()->id())->get();
        $data = Permohonan::where('users_id', auth()->id())->get();
        return view('pages.pengirim.pengirim', compact('data'));
        // return $data;
    }

    public function form_permohonan()
    {
        $data_harga = Jenis_harga::get();
        return view('pages.pengirim.form_pengirim', compact('data_harga'));
    }

    public function download_file($id){
        $permohonan = Permohonan::where('users_id',auth()->id())->where('id',$id)->first();
        $data_pass = [
            'nama_pemohon' => $permohonan->nama_pemohon,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan
        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
        return $pdf->download('Permohonan.pdf');
    }
}