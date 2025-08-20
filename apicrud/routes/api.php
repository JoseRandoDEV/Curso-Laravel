<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::resource('/note', NoteController::class);

