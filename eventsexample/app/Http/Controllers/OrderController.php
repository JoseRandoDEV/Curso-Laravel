<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    public function create()
    {
        Artisan::call('make:order', ['user_id' => 75, 'amount' => 60]);
        //CreateOrderEvent::dispatch($order);
        return response()->json("Exito");
    }
}
