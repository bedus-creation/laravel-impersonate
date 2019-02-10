<?php

namespace Lab404\Tests;

class RoutesTest extends TestCase
{
    private $routes;

    public function setUp()
    {
        parent::setUp();

        $this->routes = $this->app['router']->getRoutes();
    }

    /** @test */
    public function it_redirects_to_the_next_query_parameters()
    {
    }

    /** @test */
    public function it_adds_impersonate_route()
    {
        $this->assertTrue((bool) $this->routes->getByName('impersonate'));
        $this->assertTrue((bool) $this->routes->getByAction('Lab404\Impersonate\Controllers\ImpersonateController@take'));
    }

    /** @test */
    public function it_adds_leave_route()
    {
        $this->assertTrue((bool) $this->routes->getByName('impersonate.leave'));
        $this->assertTrue((bool) $this->routes->getByAction('Lab404\Impersonate\Controllers\ImpersonateController@leave'));
    }
}
