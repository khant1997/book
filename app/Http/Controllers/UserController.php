<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = DB::table('users')->where('U_status', 1)->get();
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
        $this->validate($request, [
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
            $U_status = $request->input('U_status');
            $created_at = date("Y-m-d H:i:s");
           
    
            DB::insert('insert into users (name,email,password,Address,Phone,U_status,created_at) values(?,?,?,?,,?,?,?)', [$name, $email,$password,$Address,$Phone,$U_status,$created_at]);
            
            $successmessage = 'Success, user created successfully ...!';
            $request->session()->flash('success', $successmessage);
    
            return redirect()->route('user/store');
        //
    }

    public function dectivate($id)
    {
         DB::table('users')->where('id', $id)->update(['U_status'=>0]);
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objs=DB::select('select * from users where id = ?',[$id]);
        return view('user.edit',['objs'=>$objs]);
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        // $this->validate($request, [
        //     'name'=>'required',
        //     'email'=>'required|email|max:255|unique:users',
        //     'status'=>'required',
        //     'password'=>'required|min:6',
        //     ]);
    
            // return Validator::make($request, [
            //     'name' => 'required|max:255',
            //     'email' => 'required|email|max:255|unique:users',
            //     'password' => 'required|min:6|confirmed',
            // ]);
               
            $name = $request->input('name');
            $email = $request->input('email');
            $old_password = $request->input('old_password');
            $user_id = $request->input('user_id');
            $new_password = $request-> input('new_password');
           
            if($old_password==$new_password){
                $password = bcrypt($request->input('password'));
                $Address = $request->input('Address');
                $Phone = $request->input('Phone');
                $U_status = '1';
                $updated_at = date("Y-m-d H:i:s");
                $userObj = User::where('id',$user_id)->first();
                $userObj->name = $name;
                $userObj->email = $email;
                $userObj->password = $new_password;
                $userObj->Address = $Address;
                $userObj->Phone = $Phone;
                $userObj->U_status = $U_status;
                $userObj->save();
                
            }
            else{  
                
                return back(); 
                
            }
           
            return redirect()->action('FrontendController@allCategories');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editprofile($id)

    {
       
        $users=DB::select('select * from users where id = ?',[$id]);
        return view('user.editprofile',['users'=>$users]);
        //
    }
}
