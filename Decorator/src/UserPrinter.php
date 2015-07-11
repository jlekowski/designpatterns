<?php

namespace DesignPatterns\Decorator;

class UserPrinter
{
    /**
     * @param UserInterface $user
     */
    public function printName(UserInterface $user)
    {
        printf("  * %s\n", $user->getName());
    }
}
