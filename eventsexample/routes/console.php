<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Route::boot(function () {
    // Crea una instancia del programador y declara tus tareas
    $schedule = $this->app->make(Schedule::class);

    $schedule->command('make:order', ['user_id' => 1, 'amount' => 20]);
});
