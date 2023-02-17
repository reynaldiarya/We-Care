<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    const title = 'Dashboard - We Care';

    public function admin()
    {
        return view('admin.home', [
            'title' => self::title,
        ]);
    }
}
