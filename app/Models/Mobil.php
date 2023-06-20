<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = "mobils";
    protected $fillable = [
        'nama_mobil',
        'cc',
        'tipe_mobil',
        'tahun_mobil',
        'nomor_polis',
        'warna',
        'foto',
    ];
}
