<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteController extends Controller
{

    public function redirecttogoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handlegooglecallback()
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('google_id', $user_google->getId())->first();

            if ($user != null) {
                auth()->login($user, true);
                return redirect('/');
            } else {
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'google_id'         => $user_google->getId(),
                    'role'              => 1,
                    'password'          => 0,
                    'email_verified_at' => now()
                ]);

                auth()->login($create, true);

                return redirect('/login');
            }
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}