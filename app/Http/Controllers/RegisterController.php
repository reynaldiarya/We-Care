<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\Register;

class RegisterController extends Controller
{
    const title = 'Register - We Care';

    public function index()
    {
        return view('auth.register', [
            'title' => self::title
        ]);
    }

    public function register(Request $request)
    {
        $email  = User::where('email', $request['email'])->first();
        if ($email != null) {
            return back()->with('salah', 'Email telah terdaftar');
        }else{
            $valid =  $request->validate([
                'name' => 'required',
                'email' => 'email|unique:users|required',
                'phone_number' => 'numeric|required',
                'password' => 'min:8|required',
                'password_confirm' => 'min:8|required|same:password'

            ]);
            $valid['password'] = Hash::make($request->password);
            User::create($valid);
        }


        $body_email = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'title' => 'We Care'
        ];

        $tujuan = $request->get('email');
        Mail::to($tujuan)->send(new Register($body_email));
        return view('auth.login', [
            'registrasi' => 'true',
            'title' => 'Login - We Care'
        ]);


    }
}
