<?php

namespace Strategy;

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
