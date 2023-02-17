<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    const title = 'Login - Backlink';

    public function index()
    {
        return view('auth.login', [
            'title' => self::title
        ]);
    }

    public function login(Request $req)
    {

        $data = $req->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $email = $data['email'];
        $password = $data['password'];

        if (Auth::attempt(array('email' => $email, 'password' => $password, 'role' => 'admin'))) {
            $req->session()->regenerate();
            return redirect('/admin');
        }

        return back()->with('salah', 'Silahkan cek kembali email atau password anda')->with('email', $email);
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
