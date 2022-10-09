<?php
namespace Biologic\Core\Classes;


use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\Project;
use Biologic\Core\Models\User;

class Auth
{
    private static $user;

    /**
     * Store this user once so we can avoid multiple queries for the logged in user.
     *
     * @return mixed
     */
    public static function user()
    {
        if(!isset(self::$user)) {
            self::$user = User::find(Session::get('userId'));
        }

        return self::$user;
    }

    public static function login($user)
    {
        Session::login($user);
    }

    /**
     * Authorizes a request against an experiment. Typically this function will
     * be called with no parameters and will attempt to extract the experiment_code
     * from the Request object. But optionally it may be passed an id explicitly,
     * for example if you are calling it from an experiment routes file.
     *
     * @param null $experiment_code
     * @return \Closure
     */
    public static function experiment($experiment_code=null)
    {
        return function(Request $request, $handler) use($experiment_code) {
            $experiment_code = $experiment_code ?? $request->route('experiment_code');

            // check if we defined this project to be publically viewable.
            if(Settings::get('public_access', $experiment_code) === true) {
                return $handler;
            }

            $user = Auth::user();

            if($experiment_code != null) {
                $experiment = Experiment::where('experiment_code', $experiment_code)->first();

                if(is_null($experiment)) {
                    return function() {
                        return new Response(404);
                    };
                }

                if(!isset($user)) {
                    return function () use($request) {
                        Session::set('intended_path', $request->getPath());
                        return redirect(url('/login'));
                    };
                }

                if(!$user->canRead($experiment)) {
                    return function () {
                        return new Response(401);
                    };
                }
            }

            return $handler;
        };
    }

    public static function portal()
    {
        return function(Request $request, $handler) {

            $user = Auth::user();

            if(!empty($user)) {
                return $handler;
            }

            return function() {
                return redirect(url('/login'));
            };
        };
    }

    public static function superuser()
    {
        return function(Request $request, $handler) {
            $user = Auth::user();

            if(!empty($user) && $user->isSuperuser()) {
                return $handler;
            }

            return function() {
                return new Response(401);
            };
        };
    }
}

