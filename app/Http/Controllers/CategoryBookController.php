<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryBookController extends Controller
{
    public function categorybook($id)
    {
        $book = DB::table('book')->where('Category_id', $id)->paginate(14);
        // return view('book.create')->with('category',$categorys);
       

        $categories = DB::table('categories')->get();
        
        return view('test', compact('categories', 'book'));
    }
}
