<?php

use Biologic\Core\Classes\Responses\ViewResponse;
use PHPUnit\Framework\TestCase;

final class ViewResponseTest extends TestCase
{
    protected $nonExistentTemplateResponse;

    protected function setUp()
    {
        $this->nonExistentTemplateResponse = new ViewResponse('/non/existent/template', []);
    }

    public function testNotExistentTemplateStatus500AfterSend()
    {
        $this->nonExistentTemplateResponse->send();

        $this->assertEquals(500, $this->nonExistentTemplateResponse->getStatus());
    }
}
