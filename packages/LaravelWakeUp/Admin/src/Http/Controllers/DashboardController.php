<?php

namespace LaravelWakeUp\Admin\Http\Controllers;

use LaravelWakeUp\Admin\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::pages.dashboard.index');
    }
}
