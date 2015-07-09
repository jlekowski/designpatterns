<?php

namespace spec\DesignPatterns\Observer;

use DesignPatterns\Observer\Mailer;
use DesignPatterns\Observer\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin Mailer
 */
class MailerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\Observer\Mailer');
    }

    public function it_sends_user_update_email(User $user)
    {
        ob_start();
        $this->sendUserUpdateEmail($user);
        ob_end_clean();
    }
}
