<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [ShopController::class, 'home'])->name('home');

Route::get('/shop', [ShopController::class, 'shop'])->name('shop');

Route::get('/shop/{category?}', [ShopController::class, 'shop']);

Route::get('/shop/view/{product}', [ShopController::class, 'view'])->name('view');



Route::get('/about', [ShopController::class, 'about'])->name('about');



Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::put('/product/toggle-status', [ProductController::class, 'toggleStatus']);




Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');