<?php

namespace spec\DesignPatterns\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiSoapClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Factory\ApiSoapClient');
    }

    public function it_can_get_version()
    {
        $this->getClientType()->shouldReturn('SOAP');
    }
}
