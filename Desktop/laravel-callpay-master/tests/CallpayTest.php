<?php

/*
 * This file is part of the Laravel Callpay package.
 *
 * (c) Prosper Zaqueu Orlando <zaqueuorlando870@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zaqueuorlando870\Callpay\Test;

use Mockery as m;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Zaqueuorlando870\Callpay\Callpay;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade as Facade;

class CallpayTest extends TestCase
{
    protected $callpay;

    public function setUp(): void
    {
        $this->callpay = m::mock('Zaqueuorlando870\Callpay\Callpay');
        $this->mock = m::mock('GuzzleHttp\Client');
    }

    /**
     * Closes the mockery of the facade after every test
     **/
    
     public function tearDown(): void
    {
        m::close();
    }

    public function testAllCustomersAreReturned()
    {
        $array = $this->callpay->shouldReceive('getAllCustomers')->andReturn(['prosper']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllTransactionsAreReturned()
    {
        $array = $this->callpay->shouldReceive('getAllTransactions')->andReturn(['transactions']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllPlansAreReturned()
    {
        $array = $this->callpay->shouldReceive('getAllPlans')->andReturn(['intermediate-plan']);

        $this->assertEquals('array', gettype(array($array)));
    }
}
