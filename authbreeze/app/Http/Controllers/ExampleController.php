<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('example', compact('user'));
    }
}
