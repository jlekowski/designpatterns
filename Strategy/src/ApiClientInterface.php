<?php

namespace DesignPatterns\Strategy;

interface ApiClientInterface
{
    /**
     * @return string
     */
    public function getApiStatus();

    /**
     * @return float
     */
    public function getApiVersion();
}
