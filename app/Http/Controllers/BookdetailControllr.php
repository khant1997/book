<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use DB;

class BookdetailControllr extends Controller
{
    public function detail($id){
      $book = DB::table('book')->where('id',$id)->first();
      return view('book.detail',compact('book'));
    
    }

    
}
