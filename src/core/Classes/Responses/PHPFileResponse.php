<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Response;

/**
 * Class PHPFileResponse
 * @package Biologic\Core\Classes\Responses
 *
 * Directly calls a PHP file as the response.
 * (for use with legacy code)
 */
class PHPFileResponse extends Response {

    private $file;

    /**
     * PHPFileResponse constructor.
     *
     * @param $file
     * @param int $status
     */
    public function __construct($file, $status=200)
    {
        parent::__construct($status);

        $this->file = $file;
    }

    /**
     * Overrides the send response in the parent class, requiring a PHP file
     * rather than trying to wrap around a controller function.
     */
    public function send()
    {
        require $this->file;
    }
}

