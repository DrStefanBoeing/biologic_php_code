<?php

use Biologic\Core\Classes\Responses\PlainResponse;
use PHPUnit\Framework\TestCase;

final class PlainResponseTest extends TestCase
{
    protected $helloResponse;
    protected $arrayResponse;

    protected function setUp()
    {
        $this->helloResponse = new PlainResponse("Hello");

        $this->arrayResponse = new PlainResponse(array('hello' => 'world'));
    }

    public function testHelloResponseBodyAfterPrepare()
    {
        $this->helloResponse->prepare();

        $this->assertEquals("Hello", $this->helloResponse->getBody());
    }

    public function testHelloResponseStatus200()
    {
        $this->helloResponse->prepare();

        $this->assertEquals(200, $this->helloResponse->getStatus());
    }

    public function testArrayResponseBodyAfterPrepare()
    {
        $this->arrayResponse->prepare();

        $this->assertEquals(json_encode(array('hello' => 'world')), $this->arrayResponse->getBody());
    }

    public function testArrayResponseStatus200()
    {
        $this->arrayResponse->prepare();

        $this->assertEquals(200, $this->arrayResponse->getStatus());
    }
}
