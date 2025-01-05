<?php

namespace Zaqueuorlando870\Callpay\Test;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase {

    protected $callpay;

    public function setUp(): void
    {
        $this->callpay = m::mock('Zaqueuorlando870\Callpay\Callpay');
        $this->mock = m::mock('GuzzleHttp\Client');
    }

    public function tearDown(): void
    {
        m::close();
    }

    /**
     * Tests that helper returns
     *
     * @test
     * @return void
     */
    function it_returns_instance_of_callpay () {

        $this->assertInstanceOf("Zaqueuorlando870\Callpay\Callpay", $this->callpay);
    }
}