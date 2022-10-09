<?php

namespace Biologic\Core\Classes;

use Exception;

/**
 * Class Okta
 *
 * Follows the singleton design pattern.
 *
 * @package Biologic\Core\Classes
 */
class Okta
{
    /**
     * @var Okta
     */
    private static $instance;
    private static $state = 'applicationState';

    /**
     * Get singleton instance.
     */
    public static function getInstance()
    {
        if (is_null( self::$instance )) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Check if user is authenticated.
     *
     * @return bool
     */
    public function isAuthenticated()
    {
        if(isset($_COOKIE['okta_access_token'])) {
            return true;
        }

        return false;
    }

    /**
     * Get the authentication code.
     *
     * If it fails, Okta handles this at their end.
     *
     * @return void. User is redirected back.
     */
    public function getAuthenticationCode ()
    {
        $query = http_build_query([
            'client_id' => setting('CLIENT_ID'),
            'response_type' => 'code',
            'response_mode' => 'query',
            'scope' => 'openid profile',
            'redirect_uri' => setting('site_url') . '/authorization-code/callback',
            'state' => self::$state
        ]);

        header('Location: ' . setting("ISSUER").'/v1/authorize?'.$query);
        exit;
    }

    /**
     * Use the auth code to get the access token.
     *
     * @throws Exception
     *
     * @return void. If success, user redirected.
    */
    public static function getAccessToken()
    {
        if(array_key_exists('state', $_REQUEST) && $_REQUEST['state'] !== self::$state) {
            set_flash('error', 'State does not match (3434465). Please contact support.');
            return view('auth/login.twig');
        }

        if(array_key_exists('code', $_REQUEST)) {

            $exchange = Okta::getInstance()->exchangeCode($_REQUEST['code']);

            if(!isset($exchange->access_token)) {
                throw new Exception('Could not exchange code for an access token');
            }

            setcookie("okta_access_token","$exchange->access_token",time()+$exchange->expires_in,"/",false);
            header('Location: / ');
            exit;
        }

        throw new Exception('An error during login has occurred (57842).');
    }

    /**
     * Checks if given data is JSON.
     *
     * @param $string
     * @return bool
     */
    private static function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * Exchange code for token. This provides SSO.
     *
     * @param $code
     * @return mixed
     */
    private static function exchangeCode($code)
    {
        $authHeaderSecret = base64_encode( setting('CLIENT_ID') . ':' . setting('CLIENT_SECRET') );
        $query = http_build_query([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => setting('site_url') . '/authorization-code/callback',
        ]);
        $headers = [
            'Authorization: Basic ' . $authHeaderSecret,
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded',
            'Connection: close',
            'Content-Length: 0'
        ];

        $url = setting("ISSUER").'/v1/token?' . $query;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if(curl_error($ch)) {
            $httpcode = 500;
        }
        curl_close($ch);
        return json_decode($output);
    }

    /**
     * Get the users profile.
     *
     * @throws Exception
     * @return array
     */
    public static function getProfile()
    {
        if(!Okta::getInstance()->isAuthenticated()) {
            return [];
        }

        $headers = [
            'Authorization: Bearer ' . $_COOKIE['okta_access_token'],
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded',
        ];

        $url = setting('ISSUER').'/v1/userinfo';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec($curl);
        curl_close($curl);

        if (Okta::getInstance()->isJson($server_output)) {
            return (array) json_decode($server_output);
        }
        else {
            throw new Exception('Something went wrong whilst retrieving the user.');
        }
    }
}
