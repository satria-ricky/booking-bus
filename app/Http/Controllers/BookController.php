<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Waktu;
use App\Models\Tanggal;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    
    public function TampilBook(){
        return view('listBook',[
            'tanggal' => Tanggal::all(),
            'waktu' => Waktu::all(),
            'booked' => Book::all()
        ]);
    }
}
