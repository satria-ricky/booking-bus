<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwal extends Controller
{
    public function list_jadwal () {
        return view('fitur.jadwal');
    }
}
