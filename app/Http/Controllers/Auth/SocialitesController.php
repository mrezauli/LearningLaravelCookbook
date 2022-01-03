<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialitesController extends Controller
{
    //

    public function redirectToFacebook()
    {
        # code...
        return Socialite::with('facebook')->redirect();
    }

    public function getFacebookCallback()
    {
        # code...
        $data = Socialite::with('facebook')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->facebook_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('facebook_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->facebook_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToTwitter()
    {
        # code...
        return Socialite::with('twitter')->redirect();
    }

    public function getTwitterCallback()
    {
        # code...
        $data = Socialite::with('twitter')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->getName();
            $user->twitter_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('twitter_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->getName();
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->twitter_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToLinkedin()
    {
        # code...
        return Socialite::with('linkedin')->redirect();
    }

    public function getLinkedinCallback()
    {
        # code...
        $data = Socialite::with('linkedin')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->linkedin_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('linkedin_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->linkedin_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToGoogle()
    {
        # code...
        return Socialite::with('google')->redirect();
    }

    public function getGoogleCallback()
    {
        # code...
        $data = Socialite::with('google')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->google_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('google_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->google_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToGithub()
    {
        # code...
        return Socialite::with('github')->redirect();
    }

    public function getGithubCallback()
    {
        # code...
        $data = Socialite::with('github')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->github_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('github_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->github_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToGitlab()
    {
        # code...
        return Socialite::with('gitlab')->redirect();
    }

    public function getGitlabCallback()
    {
        # code...
        $data = Socialite::with('gitlab')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->gitlab_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('gitlab_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->gitlab_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }

    public function redirectToBitbucket()
    {
        # code...
        return Socialite::with('bitbucket')->redirect();
    }

    public function getBitbucketCallback()
    {
        # code...
        $data = Socialite::with('bitbucket')->user();
        $user = User::where('email', $data->email)->first();

        if (!is_null($user)) {
            # code...
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->bitbucket_id = $data->id;
            $user->save();
        } else {
            # code...
            $user = User::where('bitbucket_id', $data->id)->first();
            if (is_null($user)) {
                # code...
                //Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->password = Hash::make('password');
                $user->slug = uniqid();
                $user->email = $data->email;
                $user->bitbucket_id = $data->id;
                $user->save();
            }

            Auth::login($user);
        }

        return redirect('/home')->with('success', 'Successfully logged in!');
    }
}