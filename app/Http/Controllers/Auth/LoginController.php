<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    // protected function authenticated (Request $request, $user)
    // {
    //     // dd($request);
    //     echo"sudah login";
    //     exit;
    //     if(Auth::user()->role=="direktur"){
    //         return redirect('/direktur');
    //     }else if (Auth::user()->role=="admin"){
    //         return redirect('/menuadmin');
    //     }else{
    //         Auth::logout();
    //         return redirect('login');
    //     }
    // }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginAdmin(){
        return view('/auth/login');
    }
    public function postLogin (Request $request){
        // dd($request);
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }else{
            redirect('/login');
        }
    }


}
