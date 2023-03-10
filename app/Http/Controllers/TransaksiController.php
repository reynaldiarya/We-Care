<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        return view('admin.transaksi', [
            'title' => 'Transaksi - We Care',
        ]);
    }
}
