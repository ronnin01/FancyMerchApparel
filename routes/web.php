<?php

use App\Http\Controllers\PagesController;
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

// INDEX PAGE
Route::get('/', [PagesController::class, 'indexPage'])->name('home.index');
Route::get('/signin', [PagesController::class, 'signinPage'])->name('signin');
Route::get('/signup', [PagesController::class, 'signupPage'])->name('signup');
Route::get('/logout', [PagesController::class, 'logout'])->name('logout');

// ADMIN PAGE
Route::get('/admin/dashboard', [PagesController::class, 'adminDashboardPage'])->name('admin.dashboard');
Route::get('/product-details/{id}', [PagesController::class, 'productDetailPage'])->name('product.details');
