<?php

namespace DesignPatterns\Strategy;

class ApiClientV1 implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getApiStatus(): string
    {
        $apiResponse = 'OK';

        return $apiResponse;
    }

    /**
     * {@inheritDoc}
     */
    public function getApiVersion(): float
    {
        $apiResponse = 1.2;

        return $apiResponse;
    }
}
