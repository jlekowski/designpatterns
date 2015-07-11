<?php

namespace DesignPatterns\Decorator;

class UserNoHtmlDecorator extends AbstractUserDecorator
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return strip_tags($this->user->getName());
    }
}
