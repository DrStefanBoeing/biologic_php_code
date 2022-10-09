<?php

namespace Biologic\Core\Classes;


use Biologic\Core\Classes\Responses\PHPFileResponse;
use Biologic\Core\Classes\Responses\PlainResponse;
use Biologic\Core\Models\ActivityRecord;
use Twig\Loader\FilesystemLoader;
use Illuminate\Database\Capsule\Manager;

/**
 * Class Router
 * @package Biologic\Core\Classes
 *
 * Handles the translation of requests entering the application into appropriate responses.
 * 
 */
class Router
{

    /**
     * @var Request - the incoming request
     */
    private $request;

    /**
     * Stores a reference to a callback which will instantiate our response.
     */
    private $handler;

    /**
     * A function which when called with a request should return either a new response
     * indicating some type of auth failure (e.g. 401 or a redirect); or otherwise
     * should return the current response.
     */
    private $authCallback;

    /**
     * Router constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Register a GET path as one of the application routes.
     *
     * @param $route_pattern
     * @param $function
     */
    public function get($route_pattern, $function)
    {
        $this->verb('GET', $route_pattern, $function);
    }

    /**
     * Register a POST path as one of the application routes.
     *
     * @param $route_pattern
     * @param $function
     */
    public function post($route_pattern, $function)
    {
        $this->verb('POST', $route_pattern, $function);
    }

    /**
     * Compare the incoming url to the route pattern, and the status code our
     * route defines to that in the incoming request.
     *
     * If the url is equivalent to the route pattern and the status codes are
     * the same, we try and set the handler to our response (will go through
     * if we haven't already hit a valid route and set the handler).
     *
     * @param $method
     * @param $route_pattern
     * @param $function
     */
    public function verb($method, $route_pattern, $function)
    {
        if($this->request->matches($route_pattern) && $this->request->method() == strtoupper($method)) {
            $this->prepareHandler($function, $route_pattern);
        }
    }

    /**
     * Register the response to hitting a certain url to be the loading of a file.
     *
     * @param $route_pattern
     * @param $filename
     */
    public function file($route_pattern, $filename)
    {
        // this function is expected to be called with hardcoded strings, so shouldn't have to worry about user input
        // being passed. But it still enforces that the file being loaded is inside the 'src' folder of the project.
        $dir = __DIR__.'/../../../src';
        $file = __DIR__.'/../../..'.$filename;
        if($this->request->matches($route_pattern) && strpos(realpath($file), realpath($dir)) === 0 && file_exists($file)) {
            $this->prepareHandler(function() use ($file) {
                return new PHPFileResponse($file);
            }, $route_pattern);
        }
    }

    /**
     * Wraps a number of routes inside of an authentication callback, This method
     * sets the callback, then executes all the routes inside of it.
     *
     * @param $auth_callback
     * @param $routes_callback
     */
    public function auth($auth_callback, $routes_callback)
    {
        $this->setAuthCallback($auth_callback);
        $routes_callback();
        $this->clearAuthCallback();

    }

    /**
     * Set the auth callback - this should be a function which when called with
     * the request and current response, returns either the current response
     * on success or a new response on failure.
     *
     * @param $auth_callback
     */
    public function setAuthCallback($auth_callback)
    {
        $this->authCallback = $auth_callback;
    }

    /**
     * Remove the auth callback.
     */
    public function clearAuthCallback()
    {
        $this->authCallback = null;
    }

    /**
     * Assuming we haven't already done so, this method sets up the background
     * for the response we want to send. It attaches the handler to the class and
     * sets the request route pattern so that it can extract route parameters.
     *
     * If an auth callback is set, this is also executed. I.E. if we match the route
     * but do not have access to it, we then execute the auth callback instead.
     *
     * @param $handler - a function which will instantiate the response
     * @param $route_pattern
     */
    public function prepareHandler($handler, $route_pattern)
    {
        // we take only the first valid route, so if the handler is already set, don't set it again
        if(!isset($this->handler)) {
            $this->request->setRoutePattern($route_pattern);

            $this->handler = $handler;

            // check auth callback and overwrite the response handler in the case of authentication failure
            if(isset($this->authCallback)) {
                $auth_callback = $this->authCallback;

                $this->handler = $auth_callback($this->request, $handler);
            }
        }
    }

    /**
     * Tries to extract an experiment_code from either the request url or the
     * routes file which called this function. If we find a valid experiment
     * then we overwrite the relevant settings and views.
     */
    public function loadExperimentSettings()
    {
        // we are going to try and find out if we are inside a specific experiment...
        $experiment = null;

        // do we have the {experiment_code} variable inside our route?
        if(!is_null($this->request->route('experiment_code'))) {
            $experiment = $this->request->route('experiment_code');
        }

        // have we been inside an experiment specific routes file?
        foreach(debug_backtrace() as $caller) {
            $matches = [];
            preg_match('/\/src\/experiments\/([a-zA-Z0-9\-_]+)\/routes.php/', $caller['file'], $matches);

            if(count($matches) == 2) {
                $experiment = $matches[1];
            }
        }

        // if we are inside a experiment, then load its associated settings and views
        if(!is_null($experiment)) {
            // sanitize since we are passing this dynamically to file strings
            $experiment = filesafe($experiment);

            Settings::loadExperiment($experiment);

            // make sure the route is correctly set in the request, since the controller uses this
            // to determine what experiment we are in
            $this->request->setRoute('experiment_code', $experiment);

            // add the experiment id as a global variable in twig templates
            Renderer::pushGlobal('experiment_code', $experiment);

            // check if slideshow available
            $html_dir = __DIR__.'/../../../mdata/'.$experiment.'/slides';
            if(count(glob($html_dir . '/*')) > 0) {
                Renderer::pushGlobal('show_slideshow', true);
            }

            // include extra nav links
            $extra_nav_links = [];
            $html_dir = __DIR__.'/../../../mdata/'.$experiment.'/html';
            foreach(glob($html_dir . '/*') as $file) {
                $parts = explode('mdata', $file, 2);
                preg_match('/\/([A-Za-z0-9\-\_]+)\.html/', $file,$matches);

                if(count($parts) === 2 && count($matches) === 2) {
                    $extra_nav_links[$matches[1]] = url('/mdata'.$parts[1]);
                }
            }
            Renderer::pushGlobal('nav_html_links', $extra_nav_links);

            // include experiment specific routes files
            $experiment_views_dir = __DIR__.'/../../experiments/'.$experiment.'/views';
            if(file_exists($experiment_views_dir)) {
                Renderer::pushLoader(new FilesystemLoader($experiment_views_dir));
            }

            // add default database connection for the specific experiment we are looking at
            $capsule = Settings::getCapsule();
            $capsule->addConnection([
                'driver'    => 'mysql',
                'host'      => setting('db.host'),
                'database'  => setting('data_db_name'),
                'username'  => setting('db.user'),
                'password'  => setting('db.password'),
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => ''
            ]);
        }
    }

    /**
     * Getter for the handler.
     *
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * Getter for the request.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function saveActivityRecord() {
        if(setting('activity_record') === true && !$this->request->wantsJSON()) {
            ActivityRecord::create([
                'email'                => Auth::user()->email ?? '',
                'request_uri'          => $_SERVER['REQUEST_URI'],
                'http_host'            => $_SERVER['HTTP_HOST'],
                'server_name'          => $_SERVER['SERVER_NAME'],
                'remote_addr'          => $_SERVER['REMOTE_ADDR'],
                'http_x_forwarded_for' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? ''
            ]);
        }
    }

    /**
     * Extract a response from the routes we registered earlier. If no valid
     * response can be found then we send back a 404 not found response instead.
     *
     * @return Response
     */
    public function response()
    {
        if(isset($this->handler)) {
            $this->loadExperimentSettings();
            $this->saveActivityRecord();

            $handler = $this->handler;
            $response = $handler($this->request);

            if($response instanceof Response) {
                return $response;
            } else {
                return new PlainResponse($response);
            }
        } else {
            return new Response(404);
        }
    }
}

