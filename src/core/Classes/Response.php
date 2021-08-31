<?php

namespace Biologic\Core\Classes;

/**
 * Class Response
 * @package Biologic\Core\Classes
 *
 * Handles the generation of HTTP responses.
 */
class Response
{
    protected $status;
    protected $body = '';
    protected $headers = [];

    /**
     * Response constructor.
     *
     * @param int $status
     */
    public function __construct($status = 200)
    {
        $this->status = $status;
    }

    /**
     * This is where we generate the HTTP response. We first call $this->prepare()
     * to handle any transformations of the response that the child class wants
     * to do. And after that we set the headers, status code and finally echo
     * out the response body.
     */
    public function send()
    {
        if(setting('debug')) {
            $this->prepare(); // errors caught by whoops when in debug mode
        } else {
            try {
                $this->prepare();
            } catch (\Exception $e) {
                $this->internalError($e);
            }
        }

        http_response_code($this->status);
        foreach($this->headers as $header) {
            header($header);
        }
        echo $this->body;
    }

    /**
     * This method is intended to be overwritten in child classes so that they
     * may set the body, return headers, status code etc. of the response.
     */
    public function prepare()
    {
        // override in child classes
    }

    /**
     * Handles a failure in the prepare method, setting up an internal server
     * error 500 response and logging the error itself to a file.
     *
     * @param \Exception $e
     */
    public function internalError(\Exception $e)
    {
        $this->status = 500;
        $this->headers = [];

        Logger::error($e->getMessage(), $e->getTraceAsString());
    }

    /**
     * Getter for the status code.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Getter for the body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Setter for the status.
     *
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Setter for the body.
     *
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}
