<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('/category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category/delete/{cat_id}', [CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/edit/{cat_id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{cat_id}', [CategoryController::class,'update'])->name('category.update');

});

