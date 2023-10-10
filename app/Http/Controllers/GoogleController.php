<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;


class GoogleController extends Controller
{
    public function GooglePage(){

        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback(){

        try {      
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser)

            {
                Auth::login($finduser);
      
                return redirect()->intended('dashboard');
       
            }

            else

            {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
