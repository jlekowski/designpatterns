<?php

namespace spec\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiClientV1;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin ApiClientV1
 */
class ApiClientV1Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Strategy\ApiClientV1');
    }

    public function it_gets_api_status()
    {
        $this->getApiStatus()->shouldReturn('OK');
    }

    public function it_gets_api_version()
    {
        $this->getApiVersion()->shouldReturn(1.2);
    }
}
