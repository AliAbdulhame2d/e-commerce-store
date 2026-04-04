<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class,'search']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {

    Route::get('/redirect', [HomeController::class, 'redirect']); 
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    
});


/*Route::post('/add_category', [AdminController::class,'add_category']);

Route::get('/view_category', [AdminController::class,'view_category']);

Route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

Route::post('/add_product', [ProductController::class,'create']);



//(@aab) show all Produkts, um zu löchen oder zu berabeiten 
Route::get('/show_products', [ProductController::class,'show_products']);

Route::get('/delete_product/{id}', [ProductController::class,'destroy']);

Route::get('/edit_product/{id}', [ProductController::class,'edit']);
*/