<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class jadwal_controller extends Controller
{
    public function list_jadwal () {
        return view('fitur.list_jadwal', ['loc' => "halo"]);
    }
    public function tambah_jadwal(Request $req) {
        $data = [
            "tanggal" => $req["tanggal"],
            "waktu" => $req["jam"],
            "jenis" => $req["tes"],
            "kuota" => $req["kuota"],
        ];

        jadwal::create($data);
        return redirect("/dashboard");
    }

    public function hapus_jadwal(Request $req) {
        jadwal::all()->where('id', $req["id"])->each->delete();
        // jadwal::create($data);
        return redirect("/dashboard");
    }
}
