<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvController;

Route::get('/', [CsvController::class, 'index'])->name('index');
Route::post('/import', [CsvController::class, 'import'])->name('import');
Route::get('/export', [CsvController::class, 'export'])->name('export');
