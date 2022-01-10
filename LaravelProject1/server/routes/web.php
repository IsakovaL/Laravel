<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoodsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view("dashboard");
});



Route::get('/goods/list', [GoodsController::class,'list'])->name('list');

Route::get('/goods/create', [GoodsController::class,'create'])->name('create');

Route::get('/users/list', [UserController::class,'list'])->name('list');

Route::get('/users/create', [UserController::class,'create'])->name('create');

Route::post('/goods/create', [GoodsController::class,'post'])->name('goods.post');

Route::post('/users/create', [UserController::class,'post'])->name('users.post');

Route::get('users/delete/{id}', [UserController::class,'delete'])->name('users.delete');

Route::get('goods/delete/{id}', [GoodsController::class,'delete'])->name('goods.delete');

Route::get('/admins/list', [AdminController::class,'list'])->name('list');

Route::get('/admins/create', [AdminController::class,'create'])->name('create');

Route::post('/admins/create', [AdminController::class,'post'])->name('admins.post');

Route::get('admins/delete/{id}', [AdminController::class,'delete'])->name('admins.delete');

Route::get('/goods/edit/{id}', [GoodsController::class,'edit'])->name('edit');

Route::post('/goods/edit', [GoodsController::class,'saveChanges'])->name('goods.saveChanges');

Route::get('/goods/search', [GoodsController::class,'search'])->name('search');

Route::get('/users/edit/{id}', [UserController::class,'edit'])->name('edit');

Route::post('/users/edit', [UserController::class,'saveChanges'])->name('users.saveChanges');

Route::get('/users/search', [UserController::class,'search'])->name('search');

Route::get('/admins/search', [AdminController::class,'search'])->name('search');

Route::get('/orders/list', [OrderController::class,'list'])->name('list');

Route::get('/orders/create/{id?}', [OrderController::class,'create'])->name('create');

Route::post('/orders/create', [OrderController::class,'post'])->name('orders.post');

Route::get('orders/delete/{id}', [OrderController::class,'delete'])->name('orders.delete');