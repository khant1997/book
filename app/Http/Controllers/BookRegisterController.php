<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class BookRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::table('bookorder')->join('users','bookorder.user_id','=','users.id')->join('book','bookorder.book_id','=','book.id')->where('bookorder.status','=',1)->get();
    
        return view('bookregister.index')->with('book',$book);

        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {  
        if( Auth::user()){
            $book = DB::table('book')->where('id',$id)->first();
            return view('bookregister.create',compact('book'));
        }else{
            return redirect('/login');
        }
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
            $user_id= Auth::id();
      
            $Book_Name = $request->input('id');
            
            
            $Pdf_Name = $request->input('Pdf_Name');
            $UserAddress = $request ->input('Address');

            $pickup_date=$request->input('pickup_date');
            $dropoff_date=$request->input('dropoff_date');
            $Price= $request->input('Price');
            $status="1";

            DB::insert('insert into bookorder(user_id,book_id,Pdf_Name,Address,Price,From_Date,To_date,status) values(?,?,?,?,?,?,?,?)',[$user_id,$Book_Name,$Pdf_Name,$UserAddress,$Price,$pickup_date,$dropoff_date,$status]);
            return redirect()->action('FrontendController@allCategories');
                
             
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($book_id,$user_id)
    {
      
        $book = DB::table('bookorder')->where('book_id',$book_id)->where('user_id',$user_id)->update(['status'=>2]);
       return redirect()->action('BookRegisterController@index');
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
