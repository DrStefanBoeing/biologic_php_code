<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Response;

/**
 * Class PlainResponse
 *
 * For functions/controller methods which returned some generic printable data type such as a string, int.
 *
 * @package Biologic\Core\Classes\Responses
 */
class PlainResponse extends Response {

    private $content;

    /**
     * PlainResponse constructor.
     *
     * @param $content
     * @param int $status
     */
    public function __construct($content, $status = 200)
    {
        parent::__construct($status);

        $this->content = $content;
    }

    /**
     * As well as strings, integers and so forth we also handle sending arrays
     * back to the browser by json encoding them.
     */
    public function prepare()
    {
        if(is_array($this->content)) {
            $this->body = json_encode($this->content);
        } else {
            $this->body = $this->content;
        }
    }
}
