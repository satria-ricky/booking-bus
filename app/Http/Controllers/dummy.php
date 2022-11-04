<?php

namespace App\Http\Controllers;

use App\Models\AbsenLog;
use App\Models\Dept;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

class dummy extends Controller
{
    public function index () {
        $loc = FacadesRoute::getCurrentRoute()->uri;
        // dd($loc=="input");
        return view('app',compact('loc'));
    }

    public function dashboard () {
        $loc = FacadesRoute::getCurrentRoute()->uri;
        $data = Dept::all();
        // dd($data);
        return view('fitur.dashboard',compact('loc','data'));
    }

    public function rekap () {
        $loc = FacadesRoute::getCurrentRoute()->uri;
        $data = Dept::all();
        // dd($data);
        return view('fitur.rekap',compact('loc'));
    }

    public function tambah () {
        $loc = FacadesRoute::getCurrentRoute()->uri;
        $data = Dept::all();
        // dd($data);
        return view('fitur.tambah',compact('loc'));
    }
}
