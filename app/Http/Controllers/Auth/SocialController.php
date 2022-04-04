<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Auth;
use App\Models\User;

class SocialController extends Controller
{

public function redirect()
{
    return Socialite::driver('google')->redirect();
}

public function callback()
{
    try {
            $user = Socialite::driver('google')->user();
            $users = User::where('google_id', $user->id)->first();
			//print_r($user->id);exit;
            if($users){
                Auth::login($users);
                return redirect('/home');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
					'role' => 'User',
                    'password' => Hash::make('12345678')
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }
}