<?php

namespace DesignPatterns\Factory;

class ApiClientFactory
{
    /**
     * @param string $apiType
     * @return ApiClientInterface
     * @throws \InvalidArgumentException
     */
    public static function build($apiType)
    {
        $className = sprintf('\DesignPatterns\Factory\Api%sClient', ucfirst(strtolower($apiType)));
        if (!class_exists($className)) {
            throw new \InvalidArgumentException();
        }

        return new $className();
    }
}
