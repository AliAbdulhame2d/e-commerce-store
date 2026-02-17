<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('main.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//(@aab Kom..) redirect Admin und normaler User jede in seinem Page 
Route::get('/redirect', [HomeController::class,'redirect']);

Route::post('/add_catagory', [AdminController::class,'add_catagory']);

Route::get('/view_catagory', [AdminController::class,'view_catagory']);

Route::get('/delete_catagory/{id}', [AdminController::class,'delete_catagory']);

Route::post('/add_product', [AdminController::class,'add_product']);

//(@aab Kom..) Produkt GUI, um ein neues Produkt zu hinzufügen 
Route::get('/view_product', [AdminController::class,'view_product']);

//(@aab Kom..) show all Produkts, um zu löchen oder zu berabeiten 
Route::get('/show_product', [AdminController::class,'show_product']);

Route::get('/delete_product/{id}', [AdminController::class,'delete_product']);