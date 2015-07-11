<?php

namespace DesignPatterns\Decorator;

class UserItalicHtmlDecorator extends AbstractUserDecorator
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // <span style="font-style: italic;">%s</span> or CSS class in real HTML
        return sprintf('<i>%s</i>', $this->user->getName());
    }
}
