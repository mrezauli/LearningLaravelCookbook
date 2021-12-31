<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialitesController extends Controller
{
    //

    public function redirectToFacebook()
    {
        # code...
        return Socialite::with('facebook')->redirect();
    }
}