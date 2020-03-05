<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Admin\AdminController;

class DashboardController extends AdminController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
}
