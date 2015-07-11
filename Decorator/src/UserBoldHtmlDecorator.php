<?php

namespace DesignPatterns\Decorator;

class UserBoldHtmlDecorator extends AbstractUserDecorator
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // <strong>%s</strong> or CSS class in real HTML
        return sprintf('<b>%s</b>', $this->user->getName());
    }
}
