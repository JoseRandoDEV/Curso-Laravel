<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;

Route::get('/user', function (Request $request) {
    $user = User::find(1);
    return new UserResource($user);
});


