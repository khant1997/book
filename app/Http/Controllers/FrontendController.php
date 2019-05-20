<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;
use App\Category;

class FrontendController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->q;
        $book = Book::where('Book_Name', 'LIKE', '%'.$q.'%')
                ->orWhere('Author_Name', 'LIKE', '%'.$q.'%')
                ->paginate(14);
        $categories = Category::all();

        return view('test', compact('categories', 'book'));
    }

    public function allCategories()
    {
        $book = Book::paginate(14);

        $categories = DB::table('categories')->get();
       
        return view('test', compact('categories', 'book'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::table('book')->get();
        // return view('book.create')->with('category',$categorys);
       

        $categories = DB::table('categories')->get();
       
        return view('frontend.index', compact('categories', 'book'));
        //
    }

    public function backend()
    {
        if (Auth::user()) {
            if (Auth::id() == '1') {
                return view('admin.index');
            } else {
                return redirect()->action('FrontendController@index');
            }
        } else {
            return redirect()->action('FrontendController@index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user=DB::table('users')->get();
        return view('frontend.edit');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
