<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExampleMail;

class MailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mailMe()
    {
        Mail::to('jose_rando@yahoo.com.ar')->send(new ExampleMail('Jose Rando'));
        return view('send');
    }
}
