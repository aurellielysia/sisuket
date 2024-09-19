<?php

namespace App\Http\Controllers;

use Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;

class OauthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('gauth_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);
    
                if ($finduser->is_admin) {
                    return redirect('/admin/dashboard'); 
                } else {
                    return redirect('/user/dashboard');
                }

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id'=> $user->id,
                    'gauth_type'=> 'google',
                    'password' => encrypt('admin@123')
                ]);

                Auth::login($newUser);

            if ($newUser->is_admin) {
                return redirect('/admin/dashboard'); 
            } else {
                return redirect('/user/dashboard'); 
            }
        }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
   

}
