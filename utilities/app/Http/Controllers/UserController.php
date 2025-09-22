<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\UpperCase;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('index', compact('users'));
    }

    public function search()
    {
        return view('search');
    }

    public function searchPost(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255', new UpperCase()],
        ], [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',
        ]);

        $users = User::where('name', 'LIKE', '%' . $request->name . '%')->get();
        return view('search-results', compact('users'));
    }
}
