<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Define Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contacts', [FrontendController::class, 'contacts'])->name('contacts');
Route::get('/table_reservation', [FrontendController::class, 'tableResevation'])->name('table-reservation');
Route::get('/room_reservation', [FrontendController::class, 'roomResevation'])->name('room-reservation');



// Route::redirect('dashboard', '/admin/dashboard');
// Route::redirect('admin', '/admin/dashboard');


Route::prefix('admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {

    // Dashboard
    Route::get('dashboard', Admin\Dashboard::class)->name('admin.dashboard');

    // Currencies
    Route::prefix('currencies')->group(function () {
        Route::get('/', Admin\Currencies\Index::class)->name('admin.currencies.index');
        Route::get('/create', Admin\Currencies\Create::class)->name('admin.currencies.create');
        Route::get('/{id}/edit', Admin\Currencies\Edit::class)->name('admin.currencies.edit');
    });
    // Customers
    Route::prefix('customers')->group(function () {
        Route::get('/', Admin\Customers\Index::class)->name('admin.customers.index');
        Route::get('/create', Admin\Customers\Create::class)->name('admin.customers.create');
        Route::get('/{id}/edit', Admin\Customers\Edit::class)->name('admin.customers.edit');
    });
    // Roles
    Route::prefix('roles')->group(function () {
        Route::get('/', Admin\Roles\Index::class)->name('admin.roles.index');
        Route::get('/create', Admin\Roles\Create::class)->name('admin.roles.create');
        Route::get('/{id}/edit', Admin\Roles\Edit::class)->name('admin.roles.edit');
    });
    // Testimonials
    Route::prefix('testimonials')->group(function () {
        Route::get('/', Admin\Testimonials\Index::class)->name('admin.testimonials.index');
        Route::get('/create', Admin\Testimonials\Create::class)->name('admin.testimonials.create');
        Route::get('/{id}/edit', Admin\Testimonials\Edit::class)->name('admin.testimonials.edit');
    });
    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', Admin\Users\Index::class)->name('admin.users.index');
        Route::get('/create', Admin\Users\Create::class)->name('admin.users.create');
        Route::get('/{id}/edit', Admin\Users\Edit::class)->name('admin.users.edit');
    });
    // MenuCategories
    Route::prefix('menu_categories')->group(function () {
        Route::get('/', Admin\MenuCategories\Index::class)->name('admin.menu-categories.index');
        Route::get('/create', Admin\MenuCategories\Create::class)->name('admin.menu-categories.create');
        Route::get('/{id}/edit', Admin\MenuCategories\Edit::class)->name('admin.menu-categories.edit');
    });
    // RoomTypes
    Route::prefix('room_types')->group(function () {
        Route::get('/', Admin\RoomTypes\Index::class)->name('admin.room-types.index');
        Route::get('/create', Admin\RoomTypes\Create::class)->name('admin.room-types.create');
        Route::get('/{id}/edit', Admin\RoomTypes\Edit::class)->name('admin.room-types.edit');
    });
    // TableReservations
    Route::prefix('table_reservations')->group(function () {
        Route::get('/', Admin\TableReservations\Index::class)->name('admin.table-reservations.index');
        Route::get('/create', Admin\TableReservations\Create::class)->name('admin.table-reservations.create');
        Route::get('/{id}/edit', Admin\TableReservations\Edit::class)->name('admin.table-reservations.edit');
    });
    // MenuItems
    Route::prefix('menu_items')->group(function () {
        Route::get('/', Admin\MenuItems\Index::class)->name('admin.menu-items.index');
        Route::get('/create', Admin\MenuItems\Create::class)->name('admin.menu-items.create');
        Route::get('/{id}/edit', Admin\MenuItems\Edit::class)->name('admin.menu-items.edit');
    });
});
