<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Providers\RouteServiceProvider;

use AuthenticatesUsers;


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

           /*  $entidad = DB::table('tbl_usuario_entidad')->where('usu_ent_usuario_id', auth()->user()->id)->first();
            $data_entidad = DB::table('tbl_entidad')->where('entidad_id', $entidad->usu_ent_entidad_id)->first();
            $request->session()->put('data_entidad', $data_entidad);
 */
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
