<?php

namespace spec\DesignPatterns\Factory;

use DesignPatterns\Factory\ApiClientFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin ApiClientFactory
 */
class ApiClientFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Factory\ApiClientFactory');
    }

    public function it_can_build_api_client()
    {
        $this::build('SOAP')->shouldReturnAnInstanceOf('\DesignPatterns\Factory\ApiSoapClient');

        $this::build('rEst')->shouldReturnAnInstanceOf('\DesignPatterns\Factory\ApiRestClient');
    }

    public function it_throws_exception_for_unsupported_api_client_versions()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringBuild('RPC');
    }
}
