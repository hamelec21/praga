<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;


class GoogleSocialController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('open_id', $googleUser->getId())->first();
            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('resultados');
            }else{
                $newUser =User::create([
                    'name'=> $googleUser->getName(),
                    'email'=>$googleUser->getEmail(),
                    'open_id'=>$googleUser->getId(),
                    'password' => encrypt('12345678')
                ]);
                Auth::login($newUser);
                return redirect()->intended('resultados');
            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
