<?php

namespace App\Models;
use App\Models\Progres;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    use HasFactory;
    protected $table = 'workflow';
    protected $guarded = [];
}
