<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserGreenBashDecorator;
use DesignPatterns\Decorator\UserInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserGreenBashDecorator
 */
class UserGreenBashDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserGreenBashDecorator');
    }

    public function it_decorates_user_name_green_in_bash(UserInterface $user)
    {
        $user->getName()->willReturn('Bash Green Name');

        $this->getName()->shouldReturn("\033[1;32mBash Green Name\033[0m");
    }
}
