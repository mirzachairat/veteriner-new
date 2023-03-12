<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $table = 'permohonan';
    protected $guarded = [];

    public function jenis_sampel()
    {
        return $this->hasMany(Jenis_sampel::class);
    }

    public function jenis_harga()
    {
        return $this->hasMany(jenis_harga::class, 'jenis_pengujian');
    }
    
    public function dokumen()
    {
        return $this->hasMany(Dokumen::class);
    }
    public function penerima()
    {
        return $this->hasMany(Penerima::class);
    }
    public function progres()
    {
        return $this->hasMany(Progres::class);   
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}