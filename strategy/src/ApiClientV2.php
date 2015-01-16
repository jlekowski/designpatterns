<?php

namespace Strategy;

class ApiClientV2 implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getApiStatus()
    {
        $apiResponse = ['data' => 'OK', 'version' => 2.2];

        return $apiResponse['data'];
    }

    /**
     * {@inheritDoc}
     */
    public function getApiVersion()
    {
        $apiResponse = ['data' => 'OK', 'version' => 2.2];

        return $apiResponse['version'];
    }
}
