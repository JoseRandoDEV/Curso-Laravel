<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('example');
    }

    public function index()
    {
        return response()->json("Hola desde el controlador de ejemplo",200);
    }

    public function noAccess()
    {
        return response()->json("No tienes acceso a esta ruta",403);
    }
}
