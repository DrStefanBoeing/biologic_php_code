<?php

namespace Biologic\Core\Classes;

/**
 * Class Request
 * @package Biologic\Core\Classes
 *
 * Encapsulates the important properties of an incoming HTTP request, and the
 * validation of urls against route patterns.
 */
class Request {

    /**
     * These are the characters in an incoming url which can be used as part of a route variable.
     *
     * For example if the route pattern is /categories/{category_type}
     * The incoming url /categories/gene-types would match
     * But /categories/gene#types would not, because # is not an allowed character
     *
     * Modify the constant below to allow further characters.
     *
     * It is in regex format https://regexr.com/
     */
    const ROUTE_VAR_ALLOWED_CHARS = '[a-zA-Z0-9_\-\.]+';

    /**
     * The incoming url, imagining public/ to be the docroot.
     */
    private $path;

    /**
     * HTTP method - GET/POST etc.
     */
    private $method;

    /**
     * The route pattern matching the incoming url.
     */
    private $routePattern;

    /**
     * Stored route parameters available as variables.
     */
    private $routeParams = [];

    /**
     * Request constructor.
     *
     * @param $path - should be a path relative to public/
     * @param string $method
     */
    public function __construct($path, $method='GET')
    {
        $this->path = $path;
        $this->method = $method;
    }

    /**
     * Retrieve the method with uppercase enforced.
     *
     * @return string
     */
    public function method()
    {
        return strtoupper($this->method);
    }

    /**
     * Determines whether the path of the incoming request matches the specified route pattern.
     *
     * If the last segment is a variable and there is no trailing slash, it will match the rest of a string including slashes (/).
     *
     * If the last segment is a variable but there is a trailing slash, then it will match only one segment as usual.
     *
     * --- examples ---
     * $this->path (incoming url):  /categories/eye-related-genes/listing
     * $route_pattern:              /categories/{category-name}/listing
     * => returns:                  true
     *
     * $this->path (incoming url):  /categories/eye-related-genes
     * $route_pattern:              /categories/{category-name}/listing
     * => returns:                  false
     *
     * @param $route_pattern
     * @return bool
     */
    public function matches($route_pattern)
    {
        $route_pattern = str_replace('/', '\/', $route_pattern);
        $pattern = preg_replace('/{[a-zA-Z0-9_]+}/', self::ROUTE_VAR_ALLOWED_CHARS, $route_pattern);

        // if last route segment is a variable... then match multiple dashes
        if($route_pattern[-1] === '}') {
            $pattern = substr($pattern, 0, -2).'\/'.']+';
        // remove trailing slash if present
        // (allows us to define a route with a final route being variable that doesn't match more than one segment)
        } else if($route_pattern[-1] === '/' && strlen($route_pattern) > 2) {
            $pattern = substr($pattern, 0, -2);
        }

        return preg_match('/^'.$pattern."$/", $this->path) != 0;
    }

    /**
     * Get the parameter in a route based on the specified key. The route pattern
     * should have been previously specified.
     *
     * --- examples ---
     * $this->routePattern:         /categories/{category-name}/listing
     * $this->path (incoming url):  /categories/eye-related-genes/listing
     * => returns:                  'eye-related-genes'
     *
     * @param $key
     * @return mixed|null
     */
    public function route($key)
    {
        if(!array_key_exists($key, $this->routeParams)) {
            $this->extractRouteParam($key);
        }

        return $this->routeParams[$key] ?? null;
    }

    public function setRoute($key, $value)
    {
        $this->routeParams[$key] = $value;
    }

    /**
     * This function sets the pattern this request matched from the routes file.
     *
     * The purpose of this is so that we can access route parameters using the request object.
     * (i.e. inside a controller)
     *
     * @param $route_pattern
     */
    public function setRoutePattern($route_pattern)
    {
        $this->routePattern = $route_pattern;
    }

    /**
     * Getter for the route pattern.
     *
     * @return string|null
     */
    public function getRoutePattern()
    {
        return $this->routePattern;
    }

    /**
     * Extracts the value of a given key from a route and saves it in the routeParams array.
     *
     * --- examples ---
     * $this->routePattern:         /categories/{category-name}/listing
     * $this->path (incoming url):  /categories/eye-related-genes/listing
     * => sets:                     $this->routeParams['category-name'] = 'eye-related-genes'
     *
     * @param $key
     */
    public function extractRouteParam($key)
    {
        $pattern_parts = explode('/', $this->routePattern);
        $path_parts = explode('/', $this->path, count($pattern_parts));

        $limit = count($pattern_parts);
        for($i = 0; $i < $limit; $i++) {
            if(strlen($pattern_parts[$i]) > 2 && $pattern_parts[$i][0] == '{' && $pattern_parts[$i][-1] == '}' && substr($pattern_parts[$i], 1, -1) == $key) {
                $this->routeParams[$key] = $path_parts[$i];
            }
        }
    }

    /**
     * Extracts and returns JSON which was passed up in the body of the HTTP request.
     *
     * @param bool $assoc
     * @return mixed
     */
    public function json($assoc=true)
    {
        return json_decode(file_get_contents('php://input'), $assoc);
    }

    public function getPath()
    {
        return $this->path;
    }

    public function input($key=null)
    {
        if($key === null) {
            return array_merge($_GET, $_POST);
        } else if(isset($_POST[$key])) {
            return $_POST[$key];
        } else if(isset($_GET[$key])) {
            return $_GET[$key];
        }

        return null;
    }

    public function wantsJSON()
    {
        return strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;
    }
}
