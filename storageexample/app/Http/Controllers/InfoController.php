<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InfoRequest $request)
    {
        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('images'), $fileName); // Mueve el archivo a la carpeta public/images

        //$request->file->storeAs('public/images', $fileName);



        $info = new Info();
        $info->name = $request->name;
        $info->file_uri = $fileName;
        $info->save();

        return redirect()->route('index');
    }
}
