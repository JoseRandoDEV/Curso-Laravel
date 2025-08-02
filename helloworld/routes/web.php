<?php

use Illuminate\Support\Facades\Route;

Route::view('/','landing.index')->name('index'); //metodo estatico
Route::view('/about','landing.about')->name('about');