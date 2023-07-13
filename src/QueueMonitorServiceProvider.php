<?php

namespace BipinKareparambil\QueueMonitor;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class QueueMonitorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'queue-monitor');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
