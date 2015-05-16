<?php

namespace spec\DesignPatterns\Factory;

use DesignPatterns\Factory\ApiRestClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin ApiRestClient
 */
class ApiRestClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Factory\ApiRestClient');
    }

    public function it_can_get_version()
    {
        $this->getClientType()->shouldReturn('REST');
    }
}
