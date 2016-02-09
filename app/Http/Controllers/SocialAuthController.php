<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
       use App\Http\Requests;
       use App\Http\Controllers\Controller;
       use Illuminate\Foundation\Auth\ThrottlesLogins;
       use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
       use Illuminate\Foundation\Validation\ValidatesRequests;

       use App\User;
       use Validator;


use Socialite;
use Auth;
Use redirect;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect('');
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;
         //return redirect();
    }
}