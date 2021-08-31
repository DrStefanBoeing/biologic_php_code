<?php

namespace Biologic\Core\Controllers\Auth;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Logger;
use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Session;
use Biologic\Core\Models\User;
use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\BadResponseException;

class AuthController
{
    /**
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function getLogin()
    {
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
     * @param Request $request
     *
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function postLogin(Request $request)
    {
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
            } else {
                // fail
                set_flash('error', 'Invalid credentials.');
                return view('auth/login.twig');
            }
        }

        // remote auth attempt
        $client = new GuzzleClient();
        $credentials = base64_encode($request->input('email').':'.$request->input('password'));
        $options = [
            'headers' => [
                'Authorization' => 'Basic ' . $credentials,
            ],
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
        ];

        try {
            $response = $client->post('https://aab0362.my.centrify.com/oauth2/token/BiologicDataVisualisation', $options);

            $status = $response->getStatusCode();
            $body = json_decode($response->getBody());

            //  Is user on Centrify?
            if ($status === 200 && isset($body->access_token)) {
                //$unique_name = json_decode(base64_decode(explode('.', $body->access_token)[1]))->unique_name;
                //$user = User::firstOrCreate(['email' => $unique_name]);

                $user = User::firstOrCreate(['email' => $request->input('email')]);
                Auth::login($user);

                $intended = $request->input('intended_path');
                if($intended !== null && $intended != '/login') {
                    return redirect(url($intended));
                }

                return redirect(url('/'));
            }
        } catch(BadResponseException $e) {
            if($e->getResponse()->getStatusCode() !== 400) {
                Logger::error($e->getMessage(), $e->getTraceAsString());
            }
        }

        set_flash('error', 'Invalid credentials.');
        return view('auth/login.twig');
    }

    /**
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function getLogout()
    {
        Session::destroy();
        return view('auth/logout.twig');
    }

    /**
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function postLogout()
    {
        Session::destroy();
        return view('auth/logout.twig');
    }
}
