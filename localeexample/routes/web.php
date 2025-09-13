<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Language;


Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang')->middleware(Language::class);

Route::get('/', function () {
    return view('welcome');
})->middleware(Language::class);

Route::get('/example',[WelcomeController::class, 'index'])->name('example')->middleware(Language::class);
