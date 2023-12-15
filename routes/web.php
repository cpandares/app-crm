<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'login']);

Auth::routes();



Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
Route::get('/clientes', [ContactsController::class, 'index']);


Route::get("loginForm", [\App\Http\Controllers\Auth\AuthController::class, 'loginForm'])->name('loginForm');
Route::post("login", [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get("logout", [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('reset-password', [User::class, 'resetPassword'])->name('reset-password');
Route::post('reset-password', [User::class, 'validateData'])->name('validate-data');
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
  Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
  Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
  Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');
/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */


