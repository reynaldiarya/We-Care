<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DonaturController extends Controller
{
    const title = 'Donatur - We Care';

    public function donatur()
    {
        $donatur = User::all()->where('role', 1);
        return view('admin.donatur', [
            'title' => self::title,
            'donatur' => $donatur,
        ]);
    }
}
