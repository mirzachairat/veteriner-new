<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Models\Permohonan;
use Barryvdh\DomPDF\Facade\Pdf;

class DokumenController extends Controller
{
    public function filepdf1($id)
    {
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
    public function filepdf2()
    {
        // $permohonan = Permohonan::where('users_id',auth()->id())->where('id',$id)->first();
        // $data_pass = [
        //     'nama_pemohon' => $permohonan->nama_pemohon,
        //     'alamat' => $permohonan->alamat,
        //     'instansi' => $permohonan->instansi,
        //     'jenis_hewan' => $permohonan->jenis_hewan
        // ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F2');
        return $pdf->download('Penerima.pdf');
    }
    public function filepdf3()
    {
        // $permohonan = Permohonan::where('users_id',auth()->id())->where('id',$id)->first();
        // $data_pass = [
        //     'nama_pemohon' => $permohonan->nama_pemohon,
        //     'alamat' => $permohonan->alamat,
        //     'instansi' => $permohonan->instansi,
        //     'jenis_hewan' => $permohonan->jenis_hewan
        // ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F3');
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