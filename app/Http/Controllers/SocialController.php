<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
Use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callbackFacebook()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $findUser = User::where('fb_id', $facebookUser->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('resultados');
            }else{
                $newUser =User::create([
                    'name'=> $facebookUser->name,
                    'email'=>$facebookUser->email,
                    'fb_id'=>$facebookUser->id,
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
