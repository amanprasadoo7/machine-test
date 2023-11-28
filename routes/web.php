<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

// Migrations + Seeders
Route::get('/product-count', [ProductController::class, 'index'])->name('product');
Route::get('/product-altered', [ProductController::class, 'altered'])->name('altered');


Route::get('/form', [ProductController::class, 'form'])->name('form');
Route::post('/form-store', [ProductController::class, 'form_store'])->name('form_store');


Route::get('/file-upload', [FileController::class, 'fileUpload'])->name('file-upload');
Route::post('/file-upload-store', [FileController::class, 'form_store'])->name('file-upload-store');