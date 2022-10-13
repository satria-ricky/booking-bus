<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Waktu;
use App\Models\Tanggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
    
    public function TampilBook(){
        // $users = DB::table('books')
        $book = DB::select('SELECT tanggal,jam,COUNT(book_id) as total FROM books GROUP BY  tanggal,jam');
        //      ->select(DB::raw('books.*, count(*) as total_booking'))
        //     //  ->select(DB::raw("SUM(books.book_id) as total_book, books.*"))
        //      ->groupBy('tanggal','jam')
        //      ->get();

            //  dd($users);
        return view('listBook',[
            'tanggal' => Tanggal::all(),
            'waktu' => Waktu::all(),
            'booked' => $book
        ]);
//         SELECT COUNT(book_id) as total FROM `books` 
// GROUP BY  tanggal,jam;
    }


    public function filterBook(Request $req){

        $tanggal = $req['tanggal'];
        $waktu = $req['waktu'];
        
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

        return redirect('/')->with('pesan', 'Data Berhasil Ditambah');
    }
}
