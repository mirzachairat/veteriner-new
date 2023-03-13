<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use Barryvdh\DomPDF\Facade\Pdf;

class DokumenController extends Controller
{
    public function filepdf1($id)
    {
        $permohonan = Permohonan::with('user')->where('users_id',auth()->id())->where('id',$id)->first();
        $data_pass = [
            'nama' => $permohonan->nama,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->user->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan
        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
        return $pdf->download('Permohonan.pdf');
    }
    public function filepdf2($id)
    {
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        $jenis = Jenis_sampel::where('permohonan_id', $permohonan->id)->first();
            $data_pass = [
                'jenis_hewan' => $permohonan->jenis_hewan,
                'jenis_sampel' => $jenis->jenis_sampel,
                'jumlah_contoh' => $jenis->jumlah_contoh,
                'bahan_pengawet' => $jenis->bahan_pengawet,
                'kondisi' => $jenis->kondisi,
                'kriteria' => $jenis->kriteria, 
                'jenis_pengujian' => $jenis->jenis_pengujian,
            ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F2', $data_pass);
        return $pdf->download('Penerima.pdf');
    }
    public function filepdf3($id)
    {
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        return $permohonan;
        $jenis = Jenis_sampel::where('permohonan_id', $permohonan->id)->first();
        return $permohonan;
        $data_pass = [
            'nama_pemohon' => $permohonan->nama_pemohon,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan,
            'jenis_sampel' => $jenis->jenis_sampel,

        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F3', $data_pass);
        return $pdf->download('Kontrak Pengujian.pdf');
    }

    public function dokumentasi()
    {
        $type = Session::get('detail_user')->type;
        $mimetype = null;
        $filename = null;
        $path = null;

        if ($type == 'PEMOHON') {
            $path = 'public/dokumentasi/pemohon.pdf';
            $filename = 'Dokumentasi Penggunaan Aplikasi ' . env('APP_NAME') . ' Pemohon.pdf';
        } elseif ($type == 'OPERATOR') {
            $path = 'public/dokumentasi/petugas.pdf';
            $filename = 'Dokumentasi Penggunaan Aplikasi ' . env('APP_NAME') . ' Petugas.pdf';
        } else {
            return abort(404);
        }

        $mimetype = Storage::mimeType($path);
        $meta = [
            'Content-Type' => $mimetype,
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ];

        return Response::make(Storage::get($path), 200, $meta);
    }
}