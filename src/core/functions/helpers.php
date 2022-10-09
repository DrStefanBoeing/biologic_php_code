<?php

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Renderer;
use Biologic\Core\Classes\Responses\JSONResponse;
use Biologic\Core\Classes\Responses\RedirectResponse;
use Biologic\Core\Classes\Responses\ViewResponse;
use Biologic\Core\Classes\Session;
use Biologic\Core\Classes\Settings;

/**
 * This function should be called to render a twig view as the response.
 *
 * @param $template
 * @param $variables
 * @return ViewResponse
 */
function view($template, $variables=[]) {
    return new ViewResponse($template, $variables);
}

/**
 * This function will return a response redirecting the client to another url.
 *
 * @param $location
 * @param int $status
 * @return RedirectResponse
 */
function redirect($location, $status=301) {
    return new RedirectResponse($location, $status);
}

/**
 * Creates a twig view as a variable.
 *
 * @param $template
 * @param $variables
 * @return string
 * @throws \Twig\Error\LoaderError
 * @throws \Twig\Error\RuntimeError
 * @throws \Twig\Error\SyntaxError
 */
function render($template, $variables) {
    return Renderer::render($template, $variables);
}

/**
 * Return a response which should be encoded as JSON. The variables passed
 * should be encodable as JSON, e.g. an array.
 *
 * --- example usage ---
 * json(array(
 *     'hello' => 'world',
 *     'goodbye' => array(
 *         'cruel',
 *         'world'
 *     )
 * ));
 *
 * @param $variables
 * @return JSONResponse
 */
function json($variables) {
    return new JSONResponse($variables);
}

/**
 * Retrieve a setting based on key. Nested settings may be accessed using
 * a dot (.) delimiter. Returns null if the key couldn't be found
 *
 * --- examples ---
 *
 * $settings = array(
 *      'genes' => 'some cool string',
 *      'proteins' => array(
 *          'oxytocin' => array(
 *              'name' => 'Oxytocin',
 *              'frequency' => 9
 *          )
 *      )
 * );
 *
 * call:        setting('genes')
 * => returns:  'some cool string'
 *
 * call:        setting('proteins.oxytocin.frequency')
 * => returns:  9
 *
 * call:        setting('proteins.insulin.name')
 * => returns:  null
 *
 *
 * @param $key
 * @return array|mixed|null
 */
function setting($key) {
    return Settings::get($key);
}

/**
 * Get an old request parameter, or otherwise return a default.
 *
 * If there is both a POST and GET parameter with the same key,
 * it will return the POST parameter.
 *
 * @param $key
 * @param string $default
 * @return string
 */
function old($key, $default='') {
    $parts = explode('.', $key);
    $post = $_POST;
    $get = $_GET;
    foreach($parts as $part) {
        $post = $post[$part] ?? null;
        $get = $get[$part] ?? null;
    }

    if($post !== null) {
        return $post;
    } else if($get !== null) {
        return $get;
    } else {
        return $default;
    }
}

/**
 * Form a url relative to the server root. Useful for xampp setups.
 *
 * @param string $target
 * @return string
 */
function url($target='') {
    $base = $_SERVER['REQUEST_URI'];
    preg_match("/^(\/[A-Za-z0-9_\-]+\/public)\S*$/", $base, $matches);
    $target = isset($matches[1]) ? $matches[1].$target : $target;
    return $target;
}

/**
 * Removes any GET request parameters from the url string and adjusts for the
 * server pointing one directory up from public with e.g. xampp setups.
 *
 * @return mixed|string|string[]|null
 */
function base_url_path() {
    $request_uri = $_SERVER['REQUEST_URI'];
    $request_uri = parse_url($request_uri, PHP_URL_PATH);
    $request_uri = preg_replace("/^(\/)[A-Za-z0-9_\-]+\/public\/*(\S*$)/", "$1$2", $request_uri, 1);
    return $request_uri;
}

/**
 * Escape/sanitize html characters to prevent browser JavaScript injection.
 *
 * @param $string
 * @return string
 */
function esc($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}

/**
 * Set a flash message inside the session.
 *
 * @param $key
 * @param $value
 */
function set_flash($key, $value) {
    Session::set('flash_'.$key, $value);
}

/**
 * Check if the session has a flash message for the specified type.
 *
 * @param $key
 * @return bool
 */
function have_flash($key) {
    return Session::has('flash_'.$key);
}

/**
 * Retrieve a stored flash message and delete it from the session.
 *
 * @param $key
 * @return string
 */
function flash($key) {
    $message = Session::get('flash_'.$key);
    Session::remove('flash_'.$key);
    return $message;
}

function authed_user() {
    return Auth::user();
}

/**
 * Remove non alphanumeric (and a couple of others) characters. In particular we don't want strings which contain
 * substrings like '../../' as this could allow path traversal.
 *
 * We are loading files dynamically based on user input in a few places, so need to sanitize those strings.
 *
 * @param $string
 * @return string|string[]|null
 */
function filesafe($string) {
    return preg_replace('/[^A-Za-z0-9\_\-]/', '', $string);
}

/**
 * Send the user back to the previous page with an optional type of issue, e.g error etc. and message.
 *
 * @param null $type
 * @param null $message
 * @param null $optional_text
 */
function redirect_back($type = NULL, $message = NULL){
    set_flash($type, $message);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
