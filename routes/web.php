<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'Welcome');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');
Route::view('/journal', 'journal');