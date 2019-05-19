<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use DB;
use Auth;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        if(Auth::user()){
            if(Auth::id() == '1'){
                return view('book.index')
                ->with('books', $books);
            }else{
                return redirect()->action('FrontendController@index');
            }
        }
        //$books = DB::select('select * from book');
        //$books = Book::all();
        // return view('book.index')
        //     ->with('books', $books);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys= DB::table('categories')->get();
        if(Auth::user()){
            if(Auth::id() == '1'){
                return view('book.create',compact('categorys'));
            }else{
                return redirect()->action('FrontendController@index');
            }
           
        }
        //$categorys= DB::table('categories')->get();
        // return view('book.create')->with('category',$categorys);
        //return view('book.create',compact('categorys'));
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
        // $this->validate($request,[
        //     'Book_Name'=>'required',
        //     'price'=>'required|integer|max:2147483647',
        //     'b_status'=>'required'
        //     ]);
  


        $book = new Book;
        $book->Book_Name = $request->input('Book_Name');
        $book->Author_Name = $request->input('Author_Name');
        $book->Date = $request->input('Date');
        $book->Summary= $request->input('Summary');
        $book->Category_id = $request->input('Category_id');
        $book->Price= $request->input('Price');
       
           
        $file = $request->file('Image');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $request->file('Image')->move("uploads/books/", $name);
        $book->Image = $name;

        

        $pdfile = $request->file('Pdf_Name');
        $name = rand(11111, 99999) . '.' . $pdfile->getClientOriginalExtension();
        $request->file('Pdf_Name')->move("uploads/pdf/", $name);
        $book->Pdf_Name = $name;

        
      
        $book->b_status = $request->input('b_status');
        $book->created_at =date("Y-m-d H:i:s");
        $book->save();


        //DB::insert('insert into book (Book_Name,Author_Name,Date,Summary,Category_id,Price,Image,Pdf_Name,status,created_at) values(?,?,?,?,?,?,?,?,?,?)',[$Book_Name,$Author_Name,$Date,$Summary,$Category_id,$Price,$Image,$Pdf_Name,$status,$created_at]);
        
        
        
        $successmessage = 'Success, course created successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('book');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$books = DB::select('select * from book where id = ?',[$id]);
        $books= Book::where('id',$id)->get();
        return view('book.edit',['books'=>$books]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'Book_Name'=>'required',
        //     'price'=>'required|integer|max:2147483647',
        //     'b_status'=>'required'
        //     ]);


        $Book_Name = $request->input('Book_Name');
        $Author_Name = $request->input('Author_Name');
        $Date = $request->input('Date');
        $Summary = $request->input('Summary');
        $Category_id = $request->input('Category_id');
        $Price = $request->input('Price');
        $Image = $request->input('Image');
        $Pdf_Name = $request->input('Pdf_Name');
        $b_status = $request->input('b_status');
        $updated_at = date("Y-m-d H:i:s");
      

        
        $book= Book::find($id);
        $book->Book_Name= $Book_Name;
        $book->Author_Name=$Author_Name;
        $book->Date=$Date;
        $book->Summary= $Summary;
        $book->Category_id = $Category_id;
        $book->Price= $Price;
        $book->Image=$Image;
        $book->Pdf_Name=$Pdf_Name;
        $book->b_status=$b_status ;
        $book->updated_at =$updated_at;
        $book->save();

       

        //DB::update('update book set Book_Name = ?, Author_Name = ?,Date = ?, Summary =?, Category_id = ?, Price = ?, Image = ?, Pdf_Name = ?, status = ?, updated_at = ? where id = ?',[$Book_Name,$Author_Name,$Date,$Summary,$Category_id,$Price,$Image,$Pdf_Name,$status,$updated_at,$id]);

        $successmessage = 'Success book updated successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book= Book::find($id);
        $book->delete();
        //DB::delete('delete from book where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href="/book">Click Here</a> to go back.';

    }
}
