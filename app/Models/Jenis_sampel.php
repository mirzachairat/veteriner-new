<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis_harga;

class Jenis_sampel extends Model
{
    use HasFactory;
    protected $table = 'jenis_sampel';
    protected $guarded = [];

    public function permohonan(){
        return $this->belongsTo(Permohonan::class);
    }

    public function jenis_harga(){
        return $this->belongsTo(Jenis_harga::class, 'jenis_pengujian');
    }

    public function progres(){
        return $this->belongsTo(Progres::class);
    }
}
