<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Laporan extends Model
{
    use HasFactory;

    protected $table = 'form';
    protected $fillable = [
        'Nama',
        'NomorHP',
        'UnitLayanan',
        'DeskripsiSingkatKejadian',
        'AlamatKejadian',
        'status',

    ];

    protected $hidden;
}
