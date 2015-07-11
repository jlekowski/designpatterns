<?php

namespace DesignPatterns\Decorator;

class UserUnderlineHtmlDecorator extends AbstractUserDecorator
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // <span style="text-decoration: underline;">%s</span> or CSS class in real HTML
        return sprintf('<u>%s</u>', $this->user->getName());
    }
}
