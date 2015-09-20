<?php

namespace pintegration\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \pintegration\Console\Commands\Inspire::class,
        \pintegration\Console\Commands\SyncPipedrive::class,
        \pintegration\Console\Commands\SyncPrestashopClients::class,
        \pintegration\Console\Commands\SyncPrestashopProducts::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
        $schedule->command('syncpipedrive')->everyMinute();
    }
}
