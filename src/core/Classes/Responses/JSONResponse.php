<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Response;


class JSONResponse extends Response {

    private $content;

    /**
     * JSONResponse constructor.
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
     * Set headers to indicate json and encode the body.
     */
    public function prepare()
    {
        array_push($this->headers, 'Content-Type: application/json');
        $this->body = json_encode($this->content);
    }
}
