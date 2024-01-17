<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
  {
      use SendsPasswordResetEmails;

      public function ForgetPassword() {
          return view('auth.forget-password');
      }

      public function ForgetPasswordStore(Request $request) {
         $request->validate([
              'email' => 'required|email|exists:users',
          ]);
       /*    dd($valid); */
          $token = Str::random(64);
          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
          ]);
           
          $title = 'Reset Password';

          $content = 'Click here to reset your password: ' . url('reset-password/' . $token);

          try {
             $send = mail($request->email, $title, $content);
            dd($send);
              return back()->with('message', 'We have emailed your password reset link!');
            //code...
          } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
          }
          

      }

      public function ResetPassword($token) {
          return view('auth.reset', ['token' => $token]);
      }
      
      public function ResetPasswordStore(Request $request) {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:8|confirmed',
              'password_confirmation' => 'required'
          ]);

          $update = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();

          if(!$update){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

          // Delete password_resets record
          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/login')->with('message', 'Your password has been successfully changed!');
      }
  }
