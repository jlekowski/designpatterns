<?php

namespace spec\DesignPatterns\Factory;

use DesignPatterns\Factory\ApiSoapClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin ApiSoapClient
 */
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
