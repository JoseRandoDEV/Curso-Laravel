<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Auth;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Usuario creado correctamente',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ],200);
    }

    public function loginUser(LoginRequest $request)
    {
        if(!Auth::attempt($request->only(['email','password'])))
        {
            return response()->json([
                'status' => false,
                'message' => 'Las credenciales son incorrectas'
            ],401);
        }
        $user = User::where('email',$request->email)->first();

        return response()->json([
            'status' => true,
            'message' => 'Usuario logueado correctamente',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ],200);
    }
}
