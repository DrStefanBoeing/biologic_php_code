<?php

namespace Biologic\Core\Classes;

use Twig\Environment;
use Twig\Loader\ChainLoader;
use Twig\Loader\FilesystemLoader;
use Twig_Filter;
use Twig_Function;

/**
 * Class Renderer
 * @package Biologic\Core\Classes
 *
 * Renders twig templates, and stores twig loaders (pointers to view files). The idea
 * is that we can override views from the main view folder with ones from experiment specific
 * folders by pushing the experiment specific loader before render. But we only do that
 * for routes for which we have an indication we are working on that experiment.
 */
class Renderer {

    private static $loaders = [];
    private static $globals = [];

    /**
     * Store a loader for later instantiation.
     *
     * @param FilesystemLoader $loader
     */
    public static function pushLoader(FilesystemLoader $loader)
    {
        array_unshift(self::$loaders, $loader);
    }

    public static function pushGlobal($global_key, $global_value)
    {
        self::$globals[$global_key] = $global_value;
    }

    /**
     * Renders a template which is in one of the loaders. Also pushes functions/filters
     * to twig that we want to be available inside the templates.
     *
     * @param $template
     * @param $variables
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public static function render($template, $variables)
    {
        $twig = new Environment(new ChainLoader(self::$loaders));
        $twig->addFilter(new Twig_Filter('setting', 'setting'));
        $twig->addFunction(new Twig_Function('setting', 'setting'));
        $twig->addFunction(new Twig_Function('old', 'old'));
        $twig->addFunction(new Twig_Function('url', 'url'));
        $twig->addFunction(new Twig_Function('have_flash', 'have_flash'));
        $twig->addFunction(new Twig_Function('flash', 'flash'));
        $twig->addFunction(new Twig_Function('authed_user', 'authed_user'));
        foreach(self::$globals as $global_key => $global_value) {
            $twig->addGlobal($global_key, $global_value);
        }
        $twig->addGlobal('authed_user', Auth::user());

        // add extra functions for use in twig here in the same manner as those above

        return $twig->render($template, $variables);
    }
}
