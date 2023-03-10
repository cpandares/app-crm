<?php

use App\Http\Controllers\Admin\CampaingController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\BudgetController;
use App\Http\Controllers\Admin\ComunicacionController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [ HomeController::class, 'index' ])->name('admin.home');

Route::post('campaings/create-contract/{id}', [CampaingController::class, 'createContact'])->name('add-contact-campaing');

Route::get('campaings/contacts/{id}', [CampaingController::class, 'showPipelineContacts'])->name('get-contact-campaing');

Route::resource('contacts', ContactsController::class)->names('admin.contact');

Route::resource('products', ProductoController::class)->names('admin.products');

Route::resource('notes', NoteController::class)->names('admin.notes');

Route::resource('comunicaciones', ComunicacionController::class)->names('admin.comunicacion');

Route::resource('presupuestos', BudgetController::class)->names('admin.budget');

Route::resource('campaings', CampaingController::class)->names('admin.campaings');

Route::get('contacto-presupuesto-ajax/{id}', [BudgetController::class, 'ajax'])->name('contacto-presupuesto-ajax');

Route::post('add-contacts-campaings', [CampaingController::class, 'addContact'])->name('add-contacts-campaings');

Route::put('update-status-contact', [ContactsController::class, 'updateStatus'])->name('update-status-contact');

Route::get('contactos-lista', [ContactsController::class, 'lista'])->name('admin.contactos.lista');