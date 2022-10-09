<?php

namespace Biologic\Core\Classes\Responses;

use Biologic\Core\Classes\Response;

class RedirectResponse extends Response
{
    private $location;

    public function __construct($location, $status=301)
    {
        parent::__construct($status);

        $this->location = $location;
    }

    public function prepare()
    {
        array_push($this->headers, "Location: $this->location");
    }
}

