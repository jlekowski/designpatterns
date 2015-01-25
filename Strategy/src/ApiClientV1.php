<?php

namespace DesignPatterns\Strategy;

class ApiClientV1 implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getApiStatus()
    {
        $apiResponse = 'OK';

        return $apiResponse;
    }

    /**
     * {@inheritDoc}
     */
    public function getApiVersion()
    {
        $apiResponse = 1.2;

        return $apiResponse;
    }
}
