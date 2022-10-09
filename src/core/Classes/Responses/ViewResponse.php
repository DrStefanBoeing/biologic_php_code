<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Renderer;
use Biologic\Core\Classes\Response;

/**
 * Class ViewResponse
 * @package Biologic\Core\Classes\Responses
 *
 * Returns a twig view as the response. The template should be passed to this
 * class relative to the views folder and it is important to note that the
 * view will be selected from the experiments folder if it exists and we
 * are in a experiment, and otherwise it will be selected from the core folder.
 *
 */
class ViewResponse extends Response {

    private $template;
    private $vars;

    /**
     * ViewResponse constructor.
     *
     * @param $template - path to the twig file
     * @param $vars
     * @param int $status
     */
    public function __construct($template, $vars, $status = 200)
    {
        parent::__construct($status);

        $this->template = $template;
        $this->vars = $vars;
    }

    /**
     * Render a twig template and set it to the body variable.
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function prepare()
    {
        $this->body = Renderer::render($this->template, $this->vars);
    }
}
