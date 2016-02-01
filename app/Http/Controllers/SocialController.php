<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
class SocialController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

     /**
     * Redirect the user to the provider authentication page.
     *
     * @return Response
     */
    public function getSocialAuth($provider = null) {
        
        
        if (!config("services.$provider")) {
            abort('404');
        }
//        return Socialite::driver($provider)
//            ->scopes(['scope1', 'scope2'])->redirect();
        
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function getSocialAuthCallback($provider = null) {
         try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect('suscribe');
        }
 
        $authUser = $this->findOrCreateUser($user);
 
        Auth::login($authUser, true);
        
        return redirect()->route('usuario.home');
 
//        $user = Socialite::driver($provider)->user();
//        if ($user) {
//            dd($user);
//        } else {
//            return '¡¡¡Algo fue mal!!!';
//        }
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $user
     * @return User
     */
    private function findOrCreateUser1($user)
    {
        $authUser = User::where('email', $user->email)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'social' => 1,
            'type' => 'member'
        ]);
    }

}
