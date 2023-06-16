<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;

    protected $fillable = [
        'tglPemeriksaan',
        'tujuanKunjungan',
        'metodeKb',
        'skriningKesehatan',
        'analisaPasien',
        'penatalaksanaanAsuhan',

    ];
}
