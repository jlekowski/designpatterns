<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserBoldHtmlDecorator;
use DesignPatterns\Decorator\UserInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserBoldHtmlDecorator
 */
class UserBoldHtmlDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserBoldHtmlDecorator');
    }

    public function it_decorates_user_name_bold_in_html(UserInterface $user)
    {
        $user->getName()->willReturn('Bold Name');

        $this->getName()->shouldReturn('<b>Bold Name</b>');
    }
}
