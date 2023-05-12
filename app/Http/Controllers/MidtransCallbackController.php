<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Services\Midtrans\CallbackService;

class MidtransCallbackController extends Controller
{
    public function receive()
    {
        $callback = new CallbackService;

        if ($callback->isSignatureKeyVerified()) {
            $notification = $callback->getNotification();
            $transaksi = $callback->getTransaksi();

            if ($callback->isSuccess()) {
                Transaksi::where('id', $transaksi->id)->update([
                    'status_transaksi' => 1,
                ]);
            }

            if ($callback->isExpire()) {
                Transaksi::where('id', $transaksi->id)->update([
                    'status_transaksi' => 2,
                ]);
            }

            if ($callback->isCancelled()) {
                Transaksi::where('id', $transaksi->id)->update([
                    'status_transaksi' => 3,
                ]);
            }

            return response()
                ->json([
                    'success' => true,
                    'message' => 'Notifikasi berhasil diproses',
                ]);
        } else {
            return response()
                ->json([
                    'error' => true,
                    'message' => 'Signature key tidak terverifikasi',
                ], 403);
        }
    }
}
