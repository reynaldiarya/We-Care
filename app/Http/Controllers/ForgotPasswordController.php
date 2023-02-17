<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    const title = 'Forgot Password - We Care';
    public function forgotpassword()
    {
        return view('auth.forgot-password', [
            'title' => self::title
        ]);
    }


    public function createtoken(Request $req)
    {

        $req->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $req->email,
            'token' => $token,
            'created_at' => now()
            ]);

        Mail::send('mail.forgot-password', ['token' => $token], function($message) use($req){
            $message->to($req->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'Kami telah mengirim email tautan reset kata sandi Anda!');
    }

    public function resetpassword($token) {
        return view('auth.forgot-password-form', [
            'token' => $token,
            'title' => self::title
        ]);
    }


    public function sendresetpassword(Request $req)
    {
        $req->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')->where(['email' => $req->email, 'token' => $req->token])->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $req->email)->update(['password' => Hash::make($req->password)]);

        DB::table('password_resets')->where(['email'=> $req->email])->delete();

        return redirect('/login')->with('message', 'Kata sandi Anda telah diubah!');
    }
}
