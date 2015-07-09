<?php

namespace DesignPatterns\Observer;

class Mailer
{
    /**
     * @param User $user
     */
    public function sendUserUpdateEmail(User $user)
    {
        printf("  * Email sent to User '%s' - new status: '%s'\n", $user->getName(), $user->getStatus());
    }
}
