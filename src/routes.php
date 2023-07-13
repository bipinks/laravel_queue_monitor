<?php

//
use BipinKareparambil\QueueMonitor\QueueMonitorController;
use Illuminate\Support\Facades\Route;

Route::get('/queue-monitor', [QueueMonitorController::class, 'index'])->name('queue.monitor');
