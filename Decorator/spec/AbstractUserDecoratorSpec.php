<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Child class for abstract class testing
 */
class AbstractUserDecorator extends \DesignPatterns\Decorator\AbstractUserDecorator
{
    public function getName() {}
}

/**
 * @mixin AbstractUserDecorator
 */
class AbstractUserDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beAnInstanceOf('spec\DesignPatterns\Decorator\AbstractUserDecorator');
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('spec\DesignPatterns\Decorator\AbstractUserDecorator');
    }

    public function it_implements_user_interface()
    {
        $this->shouldBeAnInstanceOf('DesignPatterns\Decorator\UserInterface');
    }
}
