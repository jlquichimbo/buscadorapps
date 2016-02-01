<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\Social;
use App\User;

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
        $user = Socialite::driver($provider)->user();
        if ($user) {
//            dd($user);
            $authUser = $this->findOrCreateUser($user, $provider);
            Auth::login($authUser, true);
            return redirect('admin');
        } else {
            return '¡¡¡Algo fue mal!!!';
        }

//        return redirect()->route('admin');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $user
     * @return User
     */
    private function findOrCreateUser($user, $provider) {
        $authUser = User::where('email', $user->email)->first();

        if ($authUser) {
            return $authUser;
        } else {
            //Crear usuario
            $new_user = new User;
            $new_user->name = $user->name;
            $new_user->email = $user->email;
//            $new_user->perfiles = $user->avatar;
            $new_user->active = 1;
            $new_user->social = 1;
            $new_user->save();

            //Registrar Información extra
            $social = new Social;
            $social->user_id = $new_user->id;
            $social->provider = $provider;
            $social->uid_provider = $user->id;
            $social->save();

            return $new_user;
        }
    }

}
