<?php

namespace spec\DesignPatterns\Decorator;

use DesignPatterns\Decorator\UserInterface;
use DesignPatterns\Decorator\UserPrinter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserPrinter
 */
class UserPrinterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Decorator\UserPrinter');
    }

    public function it_prints_user_name(UserInterface $user)
    {
        $user->getName()->shouldBeCalled();

        ob_start();
        $this->printName($user);
        ob_end_clean();
    }
}
