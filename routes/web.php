<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login'])->name('login');
    
    //registrasi
    Route::get('register',[SesiController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [SesiController::class, 'register']);
});

    
Route::get('/home', function(){
    return redirect('/products');

});

Route::middleware(['auth'])->group(function(){
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/list', [ProductController::class, 'list'])->name('products.list'); 
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    
});

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/logout',[SesiController::class, 'logout']);
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');





Route::get('dashboard', [ProductController::class, 'dashboard'])->name('dashboard');




