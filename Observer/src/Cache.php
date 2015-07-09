<?php

namespace DesignPatterns\Observer;

class Cache
{
    /**
     * @param User $user
     */
    public function storeUser(User $user)
    {
        printf("  * User '%s' cached - new status: '%s'\n", $user->getName(), $user->getStatus());
    }
}
