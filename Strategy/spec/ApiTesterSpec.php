<?php

namespace spec\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiTester;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DesignPatterns\Strategy\ApiClientInterface;

/**
 * @mixin ApiTester
 */
class ApiTesterSpec extends ObjectBehavior
{
    public function let(ApiClientInterface $apiClient)
    {
        $this->beConstructedWith($apiClient);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Strategy\ApiTester');
    }

    public function it_gets_api_client($apiClient)
    {
        $this->getApiClient()->shouldReturn($apiClient);
    }

    public function it_sets_api_client($apiClient)
    {
        $apiClientClone = clone $apiClient;

        $this->setApiClient($apiClientClone)->shouldReturn($this);
        $this->getApiClient()->shouldReturn($apiClientClone);
    }

    public function it_checks_if_api_is_working($apiClient)
    {
        $apiClient->getApiStatus()->willReturn('OK');
        $this->shouldBeApiWorking();

        $apiClient->getApiStatus()->willReturn('ERROR');
        $this->shouldNotBeApiWorking();
    }

    public function it_gets_api_version($apiClient)
    {
        $apiClient->getApiVersion()->willReturn(1.1);
        $this->getApiVersion()->shouldReturn(1.1);

        $apiClient->getApiVersion()->willReturn(2.1);
        $this->getApiVersion()->shouldReturn(2.1);
    }
}
