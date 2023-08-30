<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [homeController::class, 'index']);
Route::post('/', [CartController::class, 'addtocart'])->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::post('/cart', [CartController::class, 'delete'])->middleware('auth');

Route::post('/payment', [TransactionController::class, 'index'])->middleware('auth');

Route::get('/history', [TransactionController::class, 'history'])->middleware('auth');

Route::get('/search', [SearchController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/shoes/{shoes_id}', [ShoesController::class, 'detail']);

Route::get('/category/{cat_id}', [CategoryController::class, 'show']);

Route::get('/manageProduct',[ManageProductController::class,'showManageProduct'])->middleware('auth');

Route::get('delete/{shoes_id}', [ShoesController::class, 'delete'])->middleware('auth');

Route::get('addProduct/',[ManageProductController::class, 'showAddProduct'])->middleware('auth');
Route::post('addProduct/',[ShoesController::class, 'add'])->middleware('auth');

Route::get('updateProduct/{shoes_id}',[ManageProductController::class, 'showUpdateProduct'])->middleware('auth');
Route::post('/updateProduct/{shoes_id}',[ShoesController::class, 'update'])->middleware('auth');
