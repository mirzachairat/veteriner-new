<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permohonan;
use App\Models\Workflow;
use App\Models\Jenis_sampel;

class Progres extends Model
{
    use HasFactory;
    protected $table = 'progres';
    protected $guarded = [];

    public function permohonan(){
        return $this->belongsTo(Permohonan::class);
    }

    public function workflow(){
        return $this->belongsTo(Workflow::class);
    }

    public function jenis_sampel(){
        return $this->belongsTo(Jenis_sampel::class);
    }
}
