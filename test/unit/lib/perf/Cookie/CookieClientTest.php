<?php

namespace perf\Cookie;

/**
 *
 */
class CookieClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    protected function setUp()
    {
        $this->cookieWrapper = $this->getMock('\\perf\\Cookie\\CookieWrapper');

        $this->client = CookieClient::create($this->cookieWrapper);
    }

    /**
     *
     */
    public function testHasReturnsFalse()
    {
        $this->assertFalse($this->client->has('foo'));
    }
}
