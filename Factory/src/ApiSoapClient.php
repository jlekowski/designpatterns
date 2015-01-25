<?php

namespace DesignPatterns\Factory;

class ApiSoapClient implements ApiClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getClientType()
    {
        return 'SOAP';
    }
}
