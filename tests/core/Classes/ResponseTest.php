<?php

use Biologic\Core\Classes\Response;
use PHPUnit\Framework\TestCase;

final class ResponseTest extends TestCase
{
    protected $blankResponse;
    protected $helloResponse;
    protected $notFoundResponse;

    protected function setUp()
    {
        $this->blankResponse = new Response();

        $this->notFoundResponse = new Response(404);

        $this->helloResponse = new Response();
        $this->helloResponse->setBody("Hello");
    }

    public function testBlankResponseEmpty()
    {
        $this->expectOutputString("");
        $this->blankResponse->send();
    }

    public function testBlankResponseStatus200()
    {
        $this->blankResponse->send();
        $this->assertEquals(200, $this->blankResponse->getStatus());
    }

    public function testSendHello()
    {
        $this->expectOutputString("Hello");
        $this->helloResponse->send();
    }

    public function testNotFoundResponseStatusBefore()
    {
        $this->assertEquals(404, $this->notFoundResponse->getStatus());
    }

    public function testNotFoundResponseStatusAfter()
    {
        $this->notFoundResponse->send();
        $this->assertEquals(404, $this->notFoundResponse->getStatus());
    }

    public function testInternalErrorStatus500()
    {
        $this->helloResponse->internalError(new Exception());
        $this->assertEquals(500, $this->helloResponse->getStatus());
    }
}
