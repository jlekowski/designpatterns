<?php

namespace spec\DesignPatterns\Strategy;

use DesignPatterns\Strategy\ApiClientV2;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin ApiClientV2
 */
class ApiClientV2Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Strategy\ApiClientV2');
    }

    public function it_gets_api_status()
    {
        $this->getApiStatus()->shouldReturn('OK');
    }

    public function it_gets_api_version()
    {
        $this->getApiVersion()->shouldReturn(2.2);
    }
}
