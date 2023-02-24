<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVerify;
use Exception;

class VerifikasiAkunController extends Controller
{
    public function verifikasiakun($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $salah = "Maaf email Anda tidak ditemukan.";
        try{
            if (!is_null($verifyUser)) {
                $user = $verifyUser->user;

                if ($user->email_verified_at == null) {
                    $verifyUser->user->email_verified_at = now();
                    $verifyUser->user->save();
                    $message = "Email Anda telah diverifikasi.";
                } else {
                    $message = "Email Anda sudah diverifikasi.";
                }
            }
        }catch (Exception $e){
            return redirect()->route('login')->with('salah', $salah);
        }

        return redirect()->route('login')->with('message', $message);
    }
}
