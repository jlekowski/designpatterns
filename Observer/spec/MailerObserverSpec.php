<?php

namespace spec\DesignPatterns\Observer;

use DesignPatterns\Observer\User;
use DesignPatterns\Observer\Mailer;
use DesignPatterns\Observer\MailerObserver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin MailerObserver
 */
class MailerObserverSpec extends ObjectBehavior
{
    public function let(Mailer $mailer)
    {
        $this->beConstructedWith($mailer);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Observer\MailerObserver');
    }

    public function it_can_be_updated(Mailer $mailer, User $user)
    {
        $mailer->sendUserUpdateEmail($user)->shouldBeCalled();

        $this->update($user);
    }
}
