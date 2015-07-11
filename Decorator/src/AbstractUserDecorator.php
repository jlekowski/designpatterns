<?php

namespace DesignPatterns\Decorator;

abstract class AbstractUserDecorator implements UserInterface
{
    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @param UserInterface $user
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }
}
