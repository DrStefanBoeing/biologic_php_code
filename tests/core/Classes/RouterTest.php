<?php

use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Responses\FileResponse;
use Biologic\Core\Classes\Responses\PlainResponse;
use Biologic\Core\Classes\Responses\ViewResponse;
use Biologic\Core\Classes\Router;
use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    protected $dummyHandler;

    protected $router;
    protected $postRouter;
    protected $experimentRouter;

    protected function setUp()
    {
        $request = new Request('/categories/eye-related-genes/listing');
        $this->router = new Router($request);

        $post_request = new Request('/categories/eye-related-genes/listing', 'POST');
        $this->postRouter = new Router($post_request);

        $experiment_request = new Request('/bio01/categories');
        $this->experimentRouter = new Router($experiment_request);

        $this->dummyHandler = 'dummy';
    }

    public function testGetSamePattern()
    {
        $this->router->get('/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testGetWithWildcard()
    {
        $this->router->get('/categories/{category_type}/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testFailGetLessSegments()
    {
        $this->router->get('/categories/{category_type}', $this->dummyHandler);

        $this->assertEmpty($this->router->getHandler());
    }

    public function testFailGetWithPostRequest()
    {
        $this->router->post('/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertEmpty($this->router->getHandler());
    }

    public function testPostSamePattern()
    {
        $this->postRouter->post('/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->postRouter->getHandler());
    }

    public function testPostWithWildcard()
    {
        $this->postRouter->post('/categories/{category_type}/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->postRouter->getHandler());
    }

    public function testFailPostLessSegments()
    {
        $this->postRouter->post('/categories/{category_type}', $this->dummyHandler);

        $this->assertEmpty($this->postRouter->getHandler());
    }

    public function testFailPostWithGetRequest()
    {
        $this->postRouter->get('/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertNull($this->postRouter->getHandler());
    }

    public function testVerbSameParams()
    {
        $this->router->verb('GET', '/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testFailVerbDifferentMethod()
    {
        $this->router->verb('POST', '/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertNull($this->router->getHandler());
    }

    public function testFailVerbDifferentUrl()
    {
        $this->router->verb('POST', '/categories/eye-related-genes', $this->dummyHandler);

        $this->assertNull($this->router->getHandler());
    }

    public function testVerbUndercaseMethod()
    {
        $this->router->verb('get', '/categories/eye-related-genes/listing', $this->dummyHandler);

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testFileGet()
    {
        $this->router->file('/categories/eye-related-genes/listing', '/src/legacy/index.php');

        $this->assertNotEmpty($this->router->getHandler());
    }

    public function testFilePost()
    {
        $this->postRouter->file('/categories/eye-related-genes/listing', '/src/legacy/index.php');

        $this->assertNotEmpty($this->postRouter->getHandler());
    }

    public function testFailFileNonexistent()
    {
        $this->router->file('/categories/eye-related-genes/listing', '/src/legacy/fake_file.php');

        $this->assertEmpty($this->router->getHandler());
    }

    public function testFileHandlerCorrectObject()
    {
        $this->router->file('/categories/eye-related-genes/listing', '/src/legacy/index.php');

        $handler = $this->router->getHandler();

        $this->assertInstanceOf(FileResponse::class, $handler());
    }

    public function testPrepareHandlerTrivialCase()
    {
        $this->router->prepareHandler($this->dummyHandler, '');

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testPrepareHandlerSetOnceOnly()
    {
        $this->router->prepareHandler($this->dummyHandler, '');
        $this->router->prepareHandler('some_other_handler', '');

        $this->assertEquals($this->dummyHandler, $this->router->getHandler());
    }

    public function testPrepareHandlerSetsRequestRoutePattern()
    {
        $this->router->prepareHandler($this->dummyHandler, '/some/random/request');

        $this->assertEquals('/some/random/request', $this->router->getRequest()->getRoutePattern());
    }

    public function testPrepareHandlerSetsRouteWildcard()
    {
        $this->experimentRouter->prepareHandler($this->dummyHandler, '/{experiment_code}/categories');

        $this->assertEquals('bio01', $this->experimentRouter->getRequest()->route('experiment_code'));
    }

    public function testFailPrepareHandlerSetsWrongRouteWildcard()
    {
        $this->experimentRouter->prepareHandler($this->dummyHandler, '/{experiment_code}/categories');

        $this->assertNotEquals('bio02', $this->experimentRouter->getRequest()->route('experiment_code'));
    }

    public function testPrepareHandlerDefaultEmpty()
    {
        $this->router->prepareHandler($this->dummyHandler, '/categories');

        $this->assertEmpty($this->router->getRequest()->route('experiment_code'));
    }

    public function testPrepareHandlerPassedExperimentId()
    {
        $this->experimentRouter->prepareHandler($this->dummyHandler, '/{experiment_code}/categories');

        $this->assertEquals('bio01', $this->experimentRouter->getRequest()->route('experiment_code'));
    }

    public function testPrepareHandlerNotPassedCorrectExperimentId()
    {
        $this->experimentRouter->prepareHandler($this->dummyHandler, '/bio02/categories');

        $this->assertNotEquals('bio01', $this->experimentRouter->getRequest()->route('experiment_code'));
    }

    public function testResponsePlain()
    {
        $this->router->prepareHandler(function() {
            return 'a test string';
        }, '');

        $this->assertInstanceOf(PlainResponse::class, $this->router->response());
    }

    public function testResponseArray()
    {
        $this->router->prepareHandler(function() {
            return array('a test string');
        }, '');

        $this->assertInstanceOf(PlainResponse::class, $this->router->response());
    }

    public function testResponse404()
    {
        $response = $this->router->response();

        $this->assertEquals(404, $response->getStatus());
    }

    public function testResponseView()
    {
        $this->router->prepareHandler(function() {
            return new ViewResponse('', []);
        }, '');

        $this->assertInstanceOf(ViewResponse::class, $this->router->response());
    }
}


