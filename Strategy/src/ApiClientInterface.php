<?php

namespace DesignPatterns\Strategy;

interface ApiClientInterface
{
    /**
     * @return string
     */
    public function getApiStatus(): string;

    /**
     * @return float
     */
    public function getApiVersion(): float;
}
