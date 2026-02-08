<?php

use Illuminate\Support\Facades\Route;
//@aab Code (redirect Admin und normaler User jede in seinen Page)
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.index');
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

//@aab Code (redirect Admin und normaler User jede in seinen Page )
Route::get('/redirect', [HomeController::class,'redirect']);
