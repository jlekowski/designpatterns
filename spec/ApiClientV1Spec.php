<?php

namespace spec\Strategy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiClientV1Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Strategy\ApiClientV1');
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
