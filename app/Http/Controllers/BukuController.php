<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function home(){
        return view('home',[
            'tampil' => Book::All()
        ]);
    }
}
