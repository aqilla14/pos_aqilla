<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\customersController;

Route::get('/', function () {
    return view('welcome');
});

//categories routes
Route::get('/category', [categoriesController::class, 'index'])->name('category.index');
Route::get('/category/create', [categoriesController::class, 'create'])->name('category.create');
Route::post('/category', [categoriesController::class, 'store'])->name('category.store');
Route::get('/category/{id}/edit', [categoriesController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [categoriesController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [categoriesController::class, 'destroy'])->name('category.destroy');

//customers routes
Route::get('/customer', [customersController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [customersController::class, 'create'])->name('customers.create');
Route::post('/customer', [customersController::class, 'store'])->name('customers.store');
Route::get('/customer/{id}/edit', [customersController::class, 'edit'])->name('customers.edit');
Route::put('/customer/{id}', [customersController::class, 'update'])->name('customers.update');
Route::delete('/customer/{id}', [customersController::class, 'destroy'])->name('customers.destroy');

//product routes
