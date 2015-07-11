<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin User
 */
class UserSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('Test Name');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\User');
    }

    public function it_is_constructed_with_name()
    {
        $this->beConstructedWith('New Name');

        $this->getName()->shouldReturn('New Name');
    }

    public function it_gets_name()
    {
        $this->getName()->shouldReturn('Test Name');
    }
}
