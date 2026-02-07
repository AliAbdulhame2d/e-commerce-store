<?php

use Illuminate\Support\Facades\Route;
//@aab Code (hinzufügte diese Library)
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
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

//@aab Code (1.'/redirect' ist direction, 2.'redirect' ist Funktion in Controller 'HomeController')
Route::get('/redirect', [HomeController::class,'redirect']);

