<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
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
    return view('welcome');
});

// Group para o Client
Route::prefix('client')->group(function(){
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/save', [ClientController::class, 'store'])->name('client.store');
    Route::get('/list', [ClientController::class, 'list'])->name('client.list');
    Route::get('/edit{id}', [clientController::class, 'edit{id}'])->name('client.edit');
    Route::put('/update{id}', [clientController::class, 'update{id}'])->name('client.update');
    Route::get('/delete/{id}', [clientController::class, 'destroy'])->name('client.delete');
});

// Group para vendas
Route::prefix('sale')->group(function(){
    Route::get('/create', [SaleController::class, 'create'])->name('sale.create');
    Route::post('/save', [SaleController::class, 'store'])->name('sale.store');
    Route::get('/list', [SaleController::class, 'list'])->name('sale.list');
    Route::get('/edit/{id}', [SaleController::class, 'edit'])->name('sale.edit');
    Route::put('/update/{id}    ', [SaleController::class, 'update'])->name('sale.update');
    Route::get('/delete/{id}', [SaleController::class, 'destroy'])->name('sale.delete');
});

// Group para produtos
Route::prefix('product')->group(function(){
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/save', [ProductController::class, 'store'])->name('product.store');
    Route::get('/list', [ProductController::class, 'list'])->name('product.list');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});
