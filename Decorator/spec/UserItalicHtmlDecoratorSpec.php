<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserInterface;
use DesignPatterns\Decorator\UserItalicHtmlDecorator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserItalicHtmlDecorator
 */
class UserItalicHtmlDecoratorSpec extends ObjectBehavior
{
    public function let(UserInterface $user)
    {
        $this->beConstructedWith($user);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserItalicHtmlDecorator');
    }

    public function it_decorates_user_name_italic_in_html(UserInterface $user)
    {
        $user->getName()->willReturn('Italic Name');

        $this->getName()->shouldReturn('<i>Italic Name</i>');
    }
}
