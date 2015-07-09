<?php

namespace spec\DesignPatterns\Observer;

use DesignPatterns\Observer\Cache;
use DesignPatterns\Observer\CacheObserver;
use DesignPatterns\Observer\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin CacheObserver
 */
class CacheObserverSpec extends ObjectBehavior
{
    public function let(Cache $cache)
    {
        $this->beConstructedWith($cache);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Observer\CacheObserver');
    }

    public function it_can_be_updated(Cache $cache, User $user)
    {
        $cache->storeUser($user)->shouldBeCalled();

        $this->update($user);
    }
}
