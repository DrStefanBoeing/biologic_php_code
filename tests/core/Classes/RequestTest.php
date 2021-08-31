<?php

use Biologic\Core\Classes\Request;
use PHPUnit\Framework\TestCase;

final class RequestTest extends TestCase
{
    protected $postHomeRequest;
    protected $indexRequest;
    protected $eyeCategoryRequest;
    protected $categoryWildcardString;

    protected function setUp()
    {
        $this->postHomeRequest = new Request('/', 'post');
        $this->indexRequest = new Request('/index');
        $this->eyeCategoryRequest = new Request('/categories/eye-related-genes/listing');
        $this->categoryWildcardString = '/{category_type}';
    }

    public function testMethodCaps()
    {
        $this->assertEquals('POST', $this->postHomeRequest->method());
    }

    public function testMatchesPostHome()
    {
        $this->assertTrue($this->postHomeRequest->matches('/'));
    }

    public function testFailMatchesPostHomeWildcard()
    {
        $this->assertFalse($this->postHomeRequest->matches('/{index_type}'));
    }

    public function testMatchesIndex()
    {
        $this->assertTrue($this->indexRequest->matches('/index'));
    }

    public function testFailMatchesIndexExtended()
    {
        $this->assertFalse($this->indexRequest->matches('/indexstuff'));
    }

    public function testMatchesEyeCategoryTrivialCase()
    {
        $this->assertTrue($this->eyeCategoryRequest->matches('/categories/eye-related-genes/listing'));
    }

    public function testMatchesEyeCategoryOneWildcard()
    {
        $this->assertTrue($this->eyeCategoryRequest->matches('/categories/{category_name}/listing'));
    }

    public function testMatchesEyeCategoryTwoWildcards()
    {
        $this->assertTrue($this->eyeCategoryRequest->matches('/{index_type}/eye-related-genes/{query_type}'));
    }

    public function testMatchesEyeCategoryThreeWildcards()
    {
        $this->assertTrue($this->eyeCategoryRequest->matches('/{index_type}/{category_name}/{query_type}'));
    }

    public function testFailMatchesEyeCategoryOneSegment()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('/categories'));
    }

    public function testFailMatchesEyeCategoryTwoSegments()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('/categories/eye-related-genes'));
    }

    public function testFailMatchesEyeCategoryFourSegments()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('/categories/eye-related-genes/listing/asdf'));
    }

    public function testFailMatchesEyeCategoryOneWildcard()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('/{category_name}'));
    }

    public function testFailMatchesEyeCategoryTwoWildcards()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('{index_type}/{category_name}'));
    }

    public function testFailMatchesEyeCategoryExtraWildcard()
    {
        $this->assertFalse($this->eyeCategoryRequest->matches('/categories/eye-related-genes/listing/{category_name}'));
    }

    public function testMatchesDashWildcard()
    {
        $request = new Request('/gene-types');

        $this->assertTrue($request->matches($this->categoryWildcardString));
    }

    public function testMatchesMultipleDashWildcards()
    {
        $request = new Request('/new-gene-types');

        $this->assertTrue($request->matches($this->categoryWildcardString));
    }

    public function testMatchesUnderscoreWildcard()
    {
        $request = new Request('/gene_types');

        $this->assertTrue($request->matches($this->categoryWildcardString));
    }

    public function testMatchesNumericInput()
    {
        $request = new Request('/gene4_types075');

        $this->assertTrue($request->matches($this->categoryWildcardString));
    }

    public function testMatchesUppercase()
    {
        $request = new Request('/gENe_TYPes');

        $this->assertTrue($request->matches($this->categoryWildcardString));
    }

    public function testFailMatchesHashWildcard()
    {
        $request = new Request('/gene#types');

        $this->assertFalse($request->matches($this->categoryWildcardString));
    }

    public function testFailRouteWithoutSettingPattern()
    {
        $this->assertNull($this->eyeCategoryRequest->route('category_name'));
    }

    public function testRouteWithSettingPattern()
    {
        $this->eyeCategoryRequest->setRoutePattern('/categories/{category_name}/listing');

        $this->assertEquals('eye-related-genes', $this->eyeCategoryRequest->route('category_name'));
    }

    public function testFailRouteWithWrongPatternKey()
    {
        $this->eyeCategoryRequest->setRoutePattern('/categories/{category_name}/listing');

        $this->assertNull($this->eyeCategoryRequest->route('category-name'));
    }

    public function testRouteMultipleWildcardsFirstValue()
    {
        $this->eyeCategoryRequest->setRoutePattern('/categories/{category_name}/{index_type}');

        $this->assertEquals('eye-related-genes', $this->eyeCategoryRequest->route('category_name'));
    }

    public function testRouteMultipleWildcardsSecondValue()
    {
        $this->eyeCategoryRequest->setRoutePattern('/categories/{category_name}/{index_type}');

        $this->assertEquals('listing', $this->eyeCategoryRequest->route('index_type'));
    }
}
