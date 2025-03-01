<?php

namespace Wakeup\Admin\Http\Controllers;

use Wakeup\Admin\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::pages.dashboard.index');
    }
}
