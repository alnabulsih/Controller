<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , [PageController:: class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/user/{name}', [PageController::class, 'user']);
Route::resource('products',ProductController::class);

Route::prefix('admin')->group(function () {
Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/reports', [AdminController::class,'reports'])->name('admin.reports');
});


Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::get('/contact/result', [ContactController::class,'result'])->name('contact.result');




