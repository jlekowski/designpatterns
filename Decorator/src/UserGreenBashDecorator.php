<?php

namespace DesignPatterns\Decorator;

class UserGreenBashDecorator extends AbstractUserDecorator
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return sprintf("\033[1;32m%s\033[0m", $this->user->getName());
    }
}
