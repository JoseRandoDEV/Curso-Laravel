<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/services/example','services')->name('services');
Route::view('contact','contact')->name('contact');