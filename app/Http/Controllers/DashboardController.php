<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Dokumen;
use App\Models\Progres;
use App\Models\Workflow;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view ('dashboard');
    }
public function detail($id)
    {
        $jabatan_id = Auth::user()->jabatan_id;
        if($jabatan_id == 1){
            $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
            $data_progres =  Progres::where('permohonan_id', $id)->with('workflow')->get();
            return view('pages.pengirim.view_pengirim',compact(['data_permohonan', 'data_dok', 'data_progres']));
        }
        if($jabatan_id == 2 ){
            $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
            return view('pages.penerima.view_penerima',compact(['data_permohonan', 'data_dok']));
        }
        if($jabatan_id == 3 ){
            $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
            return view('pages.manager.view_manager',compact(['data_permohonan', 'data_dok']));

        }
        if($jabatan_id == 4 ){
            $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
        }
        return view('dashboard', compact(['data_permohonan', 'data_dok']));
    }
    
public function admin_detail(){
    $jabatan_id = Auth::user()->jabatan_id;
    if($jabatan_id == 2){
        $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
        $data_permohonan = Permohonan::get();
    }
}    
}