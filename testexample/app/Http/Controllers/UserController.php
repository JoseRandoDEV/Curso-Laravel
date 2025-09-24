<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function detail($id)
    {
        $user = User::find($id);
        if($user === null) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    public function test_get_non_existing_user_detail()
    {
        $response = $this->get('/api/users/999');
        $response->assertStatus(404);
        $response->assertSee('User not found');
    }
}
