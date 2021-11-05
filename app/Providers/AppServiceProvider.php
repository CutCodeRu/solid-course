<?php

namespace App\Providers;

use App\Utilities\Notifications\NotificationsContract;
use App\Utilities\Notifications\SlackNotification;
use App\Utilities\Notifications\TelegramNotification;
use App\Utilities\Reports\ReportContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(NotificationsContract::class, SlackNotification::class);
    }
}
