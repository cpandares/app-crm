<?php

use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\HomeController;

use Illuminate\Support\Facades\Route;


Route::get('dashboard', [ HomeController::class, 'index' ])->name('admin.home');

Route::resource('contacts', ContactsController::class)->names('admin.contact');

