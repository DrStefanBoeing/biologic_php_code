<?php

use Biologic\Core\Classes\Responses\JSONResponse;
use PHPUnit\Framework\TestCase;

final class JSONResponseTest extends TestCase
{
    protected $response;

    protected function setUp()
    {
        $this->response = new JSONResponse(array('hello' => 'world'));
    }

    public function testResponseJsonEncodes()
    {
        $this->response->prepare();
        $this->assertEquals(json_encode(array('hello' => 'world')), $this->response->getBody());
    }

    public function testResponseStatus200AfterPrepare()
    {
        $this->response->prepare();
        $this->assertEquals(200, $this->response->getStatus());
    }
}

