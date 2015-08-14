<?php

namespace test\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiClientV1;

class ApiClientV1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ApiClientV1
     */
    protected $apiClient;

    public function setUp()
    {
        $this->apiClient = new ApiClientV1();
    }

    public function testGetApiStatus()
    {
        $this->assertEquals($this->apiClient->getApiStatus(), 'OK');
    }

    public function testGetApiVersion()
    {
        $this->assertEquals($this->apiClient->getApiVersion(), 1.2);
    }
}
