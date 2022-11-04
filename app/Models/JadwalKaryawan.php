<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKaryawan extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $primaryKey  = 'id_jadwal_karyawan';
    protected $table = 'jadwal_karyawan';
}
