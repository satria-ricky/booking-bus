<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenType extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'absen_type';
    // protected $primaryKey = ''
}
