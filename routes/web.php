<?php

use App\Http\Livewire\Admin;

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


Route::get('/', function () {
    return env('MAINTENANCE_MODE') ? view('errors.maintenance') : view('welcome');
})->name('home');

Route::redirect('dashboard', 'admin/dashboard');
Route::redirect('admin', 'admin/dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');



    Route::get('/clients', Admin\Clients\Index::class)->name('admin.clients.index');
    Route::get('/clients/create', Admin\Clients\Create::class)->name('admin.clients.create');
    Route::get('/clients/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');
    Route::get('/clients/maintenance', Admin\Clients\Maintenance::class)->name('admin.clients.maintenance');


});
