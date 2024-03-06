<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Providers\RouteServiceProvider;

use AuthenticatesUsers;
use Illuminate\Auth\Events\Login;

class AuthController extends Controller
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

    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if( Auth::attempt(["name" => $request->input('email'), "password"=>$request->input('password')])){
          
           /*  LoginLog::create([
                'username' => Auth::user()->name,
                'email' => Auth::user()->email,
                'ip_address' => $request->ip(),
                'login_date' => now()
            ]); */

            return redirect()->route('contacts.lista');
        }else{
            return  redirect()->route('loginForm')->with(['message' =>'Usuario o contraseña invalidos']);
        }
    }

    public function loginForm(){


        return view('auth.login');
    }

    public function logout(){
        \session()->flush();
        Auth::logout();
        return response()->json([],204);
    }
}
