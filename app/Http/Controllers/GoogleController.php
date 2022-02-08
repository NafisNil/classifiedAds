<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;
use App\Models\User;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        
        return Socialite::driver('google')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        
        try {
           
            $user = Socialite::driver('google')->user();
            //$role = 'user'; 
            $finduser = User::where('google_id', $user->id)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect('/user_dashboard');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    //'role' => $role,
                    'password' => encrypt('my-google')
                ]);
     
                Auth::login($newUser);
                //return $newUser;
                return redirect('/user_dashboard');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
