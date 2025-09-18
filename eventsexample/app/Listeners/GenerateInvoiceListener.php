<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateInvoiceListener
{

    public function __construct() {}

    public function handle(CreateOrderEvent $event)
    {
        Invoice::create([
            'amount' => $event->order->amount,
            'order_id' => $event->order->id
        ]);
    }
}
