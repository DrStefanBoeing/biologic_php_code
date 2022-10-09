<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Response;

class FileResponse extends Response
{
    private $file;

    public function __construct($file, $status=200)
    {
        parent::__construct($status);

        $this->file = $file;
    }

    public function send()
    {
        $mime_type = mime_content_type($this->file);
        header("Content-Type: $mime_type");
        readfile($this->file);
    }
}
