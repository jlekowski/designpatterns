<?php

namespace spec\DesignPatterns\Observer;

use DesignPatterns\Observer\Cache;
use DesignPatterns\Observer\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin Cache
 */
class CacheSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Observer\Cache');
    }

    public function it_stores_user(User $user)
    {
        $user->getName()->shouldBeCalled();
        $user->getStatus()->shouldBeCalled();

        ob_start();
        $this->storeUser($user);
        ob_end_clean();
    }
}
