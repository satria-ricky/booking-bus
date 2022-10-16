<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Book;
use App\Models\Waktu;
use App\Models\Tanggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class BookController extends Controller
{
    
    
    public function TampilBook(){
        
        $book = DB::select('SELECT tanggal,jam,COUNT(book_id) as total FROM books GROUP BY  tanggal,jam');
        
        return view('listBook',[
            'tanggal' => Tanggal::all(),
            'waktu' => Waktu::all(),
            'booked' => $book
        ]);
    }


    public function filterBook()
    {
        $tanggal = request()->get('tanggal');
        $waktu = request()->get('waktu');
        // $tanggal = $req->post('tanggal');
        // $waktu = $req->post('waktu');
        return response()->json($tanggal,$waktu);

        // $tanggal = $req->get('tanggal');
        // $waktu = $req->get('waktu');

        // if ($waktu == '') {
        //     // $data = DB::select('SELECT tanggal,jam,COUNT(book_id) as total FROM books GROUP BY tanggal');
        //     $data = DB::table('books')
        //     ->selectRaw('count(book_id) as total, tanggal,jam')
        //     ->where('tanggal', $tanggal)
        //     ->groupBy('jam')
        //     ->get();
        // } else {
        //     $data = DB::select('SELECT tanggal,jam,COUNT(book_id) as total FROM books GROUP BY tanggal,jam WHERE tanggal=? AND jam=?',[$tanggal,$waktu]);
        // }
        

        // return response()->json($tanggal,$waktu);
        
    }

    public function TambahBook(Request $req){
        // dd($req);
        
        $data = array(
            "nama" => $req['nama'],
            "no_hp" => $req['no_hp'],
            "id_peserta" => $req['id_peserta'],
            "tanggal" => $req['tanggal'],
            "jam" => $req['jam']
        );
        Book::create($data);

        return redirect('/')->with('pesan', 'You Have Successfully Registered!');
    }
}
