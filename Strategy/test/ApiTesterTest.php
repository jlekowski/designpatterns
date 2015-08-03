<?php

namespace test\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiClientInterface;
use DesignPatterns\Strategy\ApiTester;

class ApiTesterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ApiTester
     */
    protected $apiTester;

    /**
     * @var ApiClientInterface
     */
    protected $apiClient;

    public function setUp()
    {
        $this->apiClient = $this->prophesize('DesignPatterns\Strategy\ApiClientInterface');
        $this->apiTester = new ApiTester($this->apiClient->reveal());
    }

    public function testGetApiClient()
    {
        $this->assertEquals($this->apiTester->getApiClient(), $this->apiClient->reveal());
    }

    public function testSetApiClient()
    {
        $apiClientClone = clone $this->apiClient->reveal();

        $this->assertEquals($this->apiTester->setApiClient($apiClientClone), $this->apiTester);
        $this->assertEquals($this->apiTester->getApiClient(), $apiClientClone);
    }

    public function testIsApiWorking()
    {
        $this->apiClient->getApiStatus()->willReturn('OK');
        $this->assertTrue($this->apiTester->isApiWorking());

        $this->apiClient->getApiStatus()->willReturn('ERROR');
        $this->assertFalse($this->apiTester->isApiWorking());
    }

    public function testGetApiVersion()
    {
        $this->apiClient->getApiVersion()->willReturn(1.1);
        $this->assertEquals($this->apiTester->getApiVersion(), 1.1);

        $this->apiClient->getApiVersion()->willReturn(2.1);
        $this->assertEquals($this->apiTester->getApiVersion(), 2.1);
    }
}
