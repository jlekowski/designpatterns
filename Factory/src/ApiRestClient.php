<?php

namespace DesignPatterns\Factory;

class ApiRestClient implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getClientType()
    {
        return 'REST';
    }
}
