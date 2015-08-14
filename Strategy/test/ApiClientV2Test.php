<?php

namespace test\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiClientV2;

class ApiClientV2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ApiClientV2
     */
    protected $apiClient;

    public function setUp()
    {
        $this->apiClient = new ApiClientV2();
    }

    public function testGetApiStatus()
    {
        $this->assertEquals($this->apiClient->getApiStatus(), 'OK');
    }

    public function testGetApiVersion()
    {
        $this->assertEquals($this->apiClient->getApiVersion(), 2.2);
    }
}
