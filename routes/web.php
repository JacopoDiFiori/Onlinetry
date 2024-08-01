<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products' , [PublicController::class , 'toProducts']);
Route::get('/books' , [PublicController::class , 'toBooks']);
Route::get('/us' , [PublicController::class , 'toUs']);