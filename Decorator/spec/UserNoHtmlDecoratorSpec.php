<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserInterface;
use DesignPatterns\Decorator\UserNoHtmlDecorator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserNoHtmlDecorator
 */
class UserNoHtmlDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserNoHtmlDecorator');
    }

    public function it_decorates_user_name_with_no_html(UserInterface $user)
    {
        $user->getName()->willReturn('<u><i><b>Plain Name</b></i></u><div></div>');

        $this->getName()->shouldReturn('Plain Name');
    }
}
