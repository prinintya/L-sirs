<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persalinan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tglPemeriksaan',
        'keluhan',
        'riwayatPasien',
        'hasilPemeriksaan',
        'analisaPasien',
        'penatalaksanaanAsuhan',
        'laporanPersalinan',
    ];
}
