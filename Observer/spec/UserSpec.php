<?php

namespace spec\DesignPatterns\Observer;

use DesignPatterns\Observer\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin User
 */
class UserSpec extends ObjectBehavior
{
    public function let(\SplObjectStorage $observersStorage)
    {
        $this->beConstructedWith($observersStorage, 'Test');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Observer\User');
    }

    public function it_has_name()
    {
        $this->getName()->shouldReturn('Test');
    }

    public function it_has_no_status()
    {
        $this->getStatus()->shouldReturn(null);
    }

    public function it_can_change_status()
    {
        $this->setStatus('Test Status');

        $this->getStatus()->shouldReturn('Test Status');
    }

    public function it_can_save_changes()
    {
        ob_start();
        $this->save();
        ob_end_clean();
    }

    public function it_attaches_observer(\SplObjectStorage $observersStorage, \SplObserver $observer)
    {
        $observersStorage->attach($observer)->shouldBeCalled();

        $this->attach($observer);
    }

    public function it_detaches_observer(\SplObjectStorage $observersStorage, \SplObserver $observer)
    {
        $observersStorage->detach($observer)->shouldBeCalled();

        $this->detach($observer);
    }

    public function it_notifies_observers(\SplObjectStorage $observersStorage, \SplObserver $observer1, \SplObserver $observer2)
    {
        $observersStorage->rewind()->willReturn();
        $observersStorage->next()->willReturn();
        $observersStorage->valid()->willReturn(true, true, false);
        $observersStorage->current()->willReturn($observer1, $observer2);

        $observer1->update($this)->shouldBeCalled();
        $observer2->update($this)->shouldBeCalled();

        $this->notify();
    }
}
