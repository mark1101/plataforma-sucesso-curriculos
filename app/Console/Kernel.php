<?php

namespace App\Console;

use App\Console\Commands\SendNotActiveReportEmail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('send:report-not-active-curriculo')->everyMinute();
        $schedule->command('send:report-expiration-days')->twiceMonthly(1, 16, '23:00');
        $schedule->command('disable:curriculum')->daily();
        $schedule->command('pending:payments')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
        SendNotActiveReportEmail::class;
    }
}
