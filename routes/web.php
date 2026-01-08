<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , [PageController:: class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/user/{name}', [PageController::class, 'user']);
Route::resource('products',ProductController::class);


