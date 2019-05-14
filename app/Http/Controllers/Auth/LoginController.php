<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated(Request $request, $user)
    {
    if(Auth::user()->U_status == 1){
        if ( Auth::id() == '1' ) {// do your margic here
            return view('admin.index');
        }
        
         return redirect('/');
    }else{
        return redirect('/login');
    }
   
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){
        session()->flush();
        return redirect()->action('FrontendController@index');
    }
}
