<?php
namespace Biologic\Core\Classes;


class Session
{
    const LIFETIME = 604800; // 1 week
    const HTTPONLY = true;

    public static function start()
    {
        session_name("biologic_session");
        $defaultCookieParams = session_get_cookie_params();
        session_set_cookie_params(self::LIFETIME, $defaultCookieParams["path"],
            $defaultCookieParams["domain"], $_SERVER['REQUEST_SCHEME'] === 'https', self::HTTPONLY);
        session_start();
    }

    public static function id()
    {
        return session_id();
    }

    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function get($key)
    {
        return $_SESSION[$key] ?? null;
    }

    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public static function set($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    public static function destroy()
    {
        session_destroy();
    }

    public static function login($user)
    {
        Session::set('userId', $user->id);
        session_regenerate_id();
    }
}
