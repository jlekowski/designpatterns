<?php

namespace DesignPatterns\Strategy;

class ApiTester
{
    /**
     * @var ApiClientInterface
     */
    protected $apiClient;

    /**
     * @param ApiClientInterface $apiClient
     */
    public function __construct(ApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @return ApiClientInterface
     */
    public function getApiClient(): ApiClientInterface
    {
        return $this->apiClient;
    }

    /**
     * @param ApiClientInterface $apiClient
     * @return $this
     */
    public function setApiClient(ApiClientInterface $apiClient): self
    {
        $this->apiClient = $apiClient;

        return $this;
    }

    /**
     * @return bool
     */
    public function isApiWorking(): bool
    {
        return $this->apiClient->getApiStatus() == 'OK';
    }

    /**
     * @return float
     */
    public function getApiVersion(): float
    {
        return $this->apiClient->getApiVersion();
    }
}
