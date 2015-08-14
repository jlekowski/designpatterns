<?php

namespace DesignPatterns\Strategy;

class ApiClientV2 implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getApiStatus(): string
    {
        $apiResponse = ['data' => 'OK', 'version' => 2.2];

        return $apiResponse['data'];
    }

    /**
     * {@inheritDoc}
     */
    public function getApiVersion(): float
    {
        $apiResponse = ['data' => 'OK', 'version' => 2.2];

        return $apiResponse['version'];
    }
}
