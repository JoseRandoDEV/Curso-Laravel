<?php

namespace App\Providers;

use App\Events\CreateOrderEvent;
use App\Listeners\GenerateInvoiceListener;
use App\Models\Order;
use App\Observers\OrderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        //CreateOrderEvent::class => [
        //    GenerateInvoiceListener::class
        //]
    ];
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Order::observe(OrderObserver::class);  //patron de observacion
    }
}
