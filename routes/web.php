<?php

use Illuminate\Support\Facades\Route;

//@aab
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

//(@aab added) redirect Admin und normaler User jede in seinem Page 
Route::get('/redirect', [HomeController::class,'redirect']);

Route::post('/add_catagory', [AdminController::class,'add_catagory']);

Route::get('/view_catagory', [AdminController::class,'view_catagory']);