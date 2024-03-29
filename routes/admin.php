<?php

use App\Http\Controllers\Admin\CampaingController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\BudgetController;
use App\Http\Controllers\Admin\ComunicacionController;
use App\Http\Controllers\CustomersApiController;
use App\Http\Controllers\User;

use Illuminate\Support\Facades\Route;


Route::get('dashboard', [ HomeController::class, 'index' ])->name('admin.home');

Route::post('campaings/create-contract/{id}', [CampaingController::class, 'createContact'])->name('add-contact-campaing');

Route::get('campaings/contacts/{id}', [CampaingController::class, 'showPipelineContacts'])->name('get-contact-campaing');

Route::resource('contacts', ContactsController::class)->names('admin.contact')->except(['create']);

Route::get('contact/create/{id?}', [ContactsController::class, 'createContact'])->name('admin.create-contact');

Route::resource('products', ProductoController::class)->names('admin.products');

Route::resource('notes', NoteController::class)->names('admin.notes');

Route::resource('comunicaciones', ComunicacionController::class)->names('admin.comunicacion');

Route::resource('presupuestos', BudgetController::class)->names('admin.budget');

Route::resource('campaings', CampaingController::class)->names('admin.campaings');

Route::get('contacto-presupuesto-ajax/{id}', [BudgetController::class, 'ajax'])->name('contacto-presupuesto-ajax');

Route::delete('delete-contacto-presupuesto-ajax/{id}', [BudgetController::class, 'destroy'])->name('admin.budget.destroy');

Route::post('add-contacts-campaings', [CampaingController::class, 'addContact'])->name('add-contacts-campaings');

Route::delete('delete-contacts-campaings/{id}', [CampaingController::class, 'deleteContact'])->name('delete-contacts-campaings');

Route::put('update-status-contact', [ContactsController::class, 'updateStatus'])->name('update-status-contact');

Route::get('contactos-lista', [ContactsController::class, 'lista'])->name('admin.contactos.lista');

Route::post('update-photo-contact/{id}', [ContactsController::class, 'updatePhoto'])->name('update-photo-contact');

Route::get('clientes-api', [CustomersApiController::class, 'index'])->name('admin.clientes.api');

Route::get('pedidos-api', [ProductoController::class, 'listarPedidosApi'])->name('admin.pedidos.api');
Route::get('pedido-api/{pedido}', [ProductoController::class, 'showPedidoApi'])->name('admin.pedidos.show');

Route::get('calendario', [CampaingController::class, 'calendario'])->name('admin.calendario.index');

Route::get('campaing-ajax', [CampaingController::class, 'ajaxCampaing'])->name('ajax-campaing');

Route::resource('usuarios', User::class)->names('admin.usuarios');

Route::get('config', [User::class, 'configSystem'])->name('admin.config');

Route::get('usuario-detail/{id}', [User::class, 'detailUser'])->name('usuario-detail');
Route::put('usuario-detail/{id}', [User::class, 'updateUser'])->name('usuario-update');
