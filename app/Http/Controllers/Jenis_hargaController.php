<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jenis_harga;

class Jenis_hargaController extends Controller
{
    public function index(){
        return view('pages.daftar_harga');
    }
    public function getHarga(Request $request){
        $id = $request->input('id');
        $data =  Jenis_harga::find($id);
        return response($data);
    }
    
}
