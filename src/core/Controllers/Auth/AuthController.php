<?php

namespace Biologic\Core\Controllers\Auth;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Logger;
use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Session;
use Biologic\Core\Models\User;
use Exception;
use Biologic\Core\Classes\Okta;
use Illuminate\Support\Facades\View;

class AuthController
{
    /**
     * Get the logged in user.
     *
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function getLogin()
    {
        // Handle Okta Single Sign-on.
        if(isset($_COOKIE['okta_access_token'])) {
            try {
                $okta_profile = Okta::getInstance()->getProfile();
                $okta_long_email = $okta_profile['preferred_username'];
                $user = User::firstOrCreate(['email' => $okta_long_email]);
                Auth::login($user);
                return redirect(url('/'));
            }
            catch (Exception $e) {
                set_flash('error', $e->getMessage());
                return view('auth/login.twig');
            }
        }
        // Get the session user.
        $user = [];
        if (Session::get('userId')) {
            $user = Auth::user();
        }
        $intended = Session::get('intended_path');
        Session::remove('intended_path');

        return view('auth/login.twig', [
            'user' => $user,
            'intended' => $intended
        ]);
    }

    /**
     * Handle local and remote login.
     *
     * @param Request $request
     *
     * @return View
     */
    public static function postLogin(Request $request)
    {
        if (!empty($request->input('login-type')
            && $request->input('login-type') === 'remote')) {
            // SSO auth remote auth attempt.
            if (Okta::getInstance()->isAuthenticated()) {
                $user = [];
                if (Session::get('userId')) {
                    $user = Auth::user();
                }
                $intended = Session::get('intended_path');
                if($intended !== null && $intended != '/login') {
                    return redirect(url($intended));
                }

                return view('auth/login.twig', [
                    'user' => $user,
                    'intended' => $intended
                ]);
            }
            else {
                Okta::getInstance()->getAuthenticationCode();
            }
        }
        else {
            // local auth attempt
            $user = User::where([
                'email' => $request->input('email'),
                'local_auth' => 1
            ])->first();
            if(!empty($user)) {
                if(password_verify($request->input('password'), $user->password)) {
                    Auth::login($user);

                    // log in
                    $intended = $request->input('intended_path');
                    if($intended !== null && $intended != '/login') {
                        return redirect(url($intended));
                    }

                    return redirect(url('/'));
                }
            }

            set_flash('error', 'Invalid credentials.');
            return view('auth/login.twig');
        }

        set_flash('error', 'Login error. Please contact support.');
        return view('auth/login.twig');
    }

    /**
     * Logout user.
     *
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function getLogout()
    {
        if(isset($_COOKIE['okta_access_token'])) {
            unset($_COOKIE['okta_access_token']);
            setcookie('okta_access_token', null, -1, '/');
        }

        Session::destroy();
        return view('auth/logout.twig');
    }

    /**
     * Logout user.
     *
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function postLogout()
    {
        if(isset($_COOKIE['okta_access_token'])) {
            unset($_COOKIE['okta_access_token']);
            setcookie('okta_access_token', null, -1, '/');
        }

        Session::destroy();
        return view('auth/logout.twig');
    }
}
