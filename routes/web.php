<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SaladController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [GuestController::class, 'index'])->name('home');
Route::get('/about', [GuestController::class, 'about'])->name('about');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/cart', [SaladController::class, 'index'])->name('cart')->middleware('auth');
Route::get('/cart/{id}', [SaladController::class, 'addSalad'])->name('addsalad.to.cart')->middleware('auth');
Route::delete('/delete-cart-product', [SaladController::class, 'destroy'])->name('delete.cart.product');
// Route::get('/checkout', [SaladController::class, 'tampil'])->name('tampil')->middleware('auth');

Route::get('/salad/create', [SaladController::class, 'create'])->name('salad.create');
Route::post('/salad/store', [SaladController::class, 'store'])->name('salad.store');

Route::get('product/{id}/edit', [SaladController::class, 'edit'])->name('product.edit');
Route::put('product/{id}/update', [SaladController::class, 'update'])->name('product.update');

Route::delete('products/{id}/delete', [SaladController::class, 'hapus']);
