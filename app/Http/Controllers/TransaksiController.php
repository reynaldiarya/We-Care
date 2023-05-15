<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Campaign;
use App\Models\User;
use Carbon\Carbon;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        $transaksi = Transaksi::with('user')->get();
        return view('admin.transaksi', [
            'title' => 'Transaksi - We Care',
            'transaksi' => $transaksi,
        ]);
    }
    public function index($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('landing.donasi', [
            'campaign'  => $campaign,
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $transaksi = Transaksi::create([
                'user_id' => $request->user_id,
                'campaign_id' => $request->campaign_id,
                'nominal_transaksi' => $request->nominal,
                'tgl_transaksi' => Carbon::now(),
                'keterangan' => $request->pesan,
                'status_transaksi' => 0,
            ]);
            $id = $transaksi->id;
            return redirect('/checkout/' . $id)->with('success', 'Donasi berhasil dilakukan');
        }
        return view('/');
    }

    public function checkout($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $campaign = Campaign::findOrFail($transaksi->campaign_id);
        $user = User::findOrFail($transaksi->user_id);

        // Set your Merchant Server Key
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');

        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;

        // Set transaction's order_id. Must be unique.
        $orderId = $transaksi->id;

        // Set transaction's amount (required)
        $amount = $transaksi->nominal_transaksi + 5000;

        // Set transaction's customer details
        $customerDetails = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        // Initialize transaction parameter
        $transaction = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $amount,
            ],
            'customer_details' => $customerDetails,
        ];

        // Create Snap Token transaction
        $snapToken = Snap::getSnapToken($transaction);

        // Render checkout page with Snap Token
        // return view('checkout', compact('snapToken'));

        return view('landing.checkout', [
            'transaksi' => $transaksi,
            'campaign' => $campaign,
            'snapToken' => $snapToken,
        ]);
    }
}
