<?php

use Illuminate\Support\Facades\Route;
use Wakeup\Admin\Http\Controllers\DashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
});