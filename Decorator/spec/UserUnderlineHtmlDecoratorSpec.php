<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserInterface;
use DesignPatterns\Decorator\UserUnderlineHtmlDecorator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserUnderlineHtmlDecorator
 */
class UserUnderlineHtmlDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserUnderlineHtmlDecorator');
    }

    public function it_decorates_user_name_undeline_in_html(UserInterface $user)
    {
        $user->getName()->willReturn('Underline Name');

        $this->getName()->shouldReturn('<u>Underline Name</u>');
    }
}
