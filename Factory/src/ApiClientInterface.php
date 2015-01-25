<?php

namespace DesignPatterns\Factory;

interface ApiClientInterface
{
    /**
     * @return string
     */
    public function getClientType();
}
