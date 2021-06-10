<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::put('/product/modify', [ProductController::class, 'modify'])->name('product.modify');
Route::delete('/product/delete', [ProductController::class, 'delete'])->name('product.delete');
