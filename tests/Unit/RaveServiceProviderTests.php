<?php

namespace Tests\Unit;

use Tests\TestCase;
use ShoboySnr\Rave\Rave;

class RaveServiceProviderTests extends TestCase
{
    /**
     * Tests if service provider Binds alias "laravelrave" to \ShoboySnr\Rave\Rave
     *
     * @test
     */
    public function isBound()
    {
        $this->assertTrue($this->app->bound('laravelrave'));
    }
    /**
     * Test if service provider returns \Rave as alias for \ShoboySnr\Rave\Rave
     *
     * @test
     */
    public function hasAliased()
    {
        $this->assertTrue($this->app->isAlias("ShoboySnr\Rave\Rave"));
        $this->assertEquals('laravelrave', $this->app->getAlias("ShoboySnr\Rave\Rave"));
    }
}
