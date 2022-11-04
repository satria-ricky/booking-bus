<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public $timestamps = false;
    // protected $fillable = ['id_karyawan'];
    public $primaryKey  = 'id_karyawan';
    protected $table = 'karyawan';
}
