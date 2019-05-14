<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = DB::table('users')->where('Status',1)->get();
        return view('user.index')
            ->with('objs', $objs);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|max:255|unique:users',
            'status'=>'required',
            'password'=>'required|min:6',
            ]);
    
            // return Validator::make($request, [
            //     'name' => 'required|max:255',
            //     'email' => 'required|email|max:255|unique:users',
            //     'password' => 'required|min:6|confirmed',
            // ]);
    
            $name = $request->input('name');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $Address = $request->input('Address');
            $Phone = $request->input('Phone');
            $status = $request->input('status');
            $created_at = date("Y-m-d H:i:s");
           
    
            DB::insert('insert into users (name,email,password,Address,Phone,status,created_at) values(?,?,?,?,,?,?,?)',[$name, $email,$password,$Address,$Phone,$status,$created_at]);
            
            $successmessage = 'Success, user created successfully ...!';
            $request->session()->flash('success', $successmessage);
    
            return redirect()->route('user/store');
        //
    }

    public function dectivate($id){
         DB::table('users')->where('id',$id)->update(['Status'=>0]);
         return redirect()->action('UserController@index');
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
