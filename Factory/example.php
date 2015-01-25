<?php

/**
 * The main idea is that ApiClientFactory determines which API client object to return.
 *
 * In this simple example there are clients for different API types.
 *
 * As long as API type passed to ApiClientFactory is supported, appropriate API client is instantiated and returned.
 */

require_once __DIR__ . '/../vendor/autoload.php';

$apiClient = DesignPatterns\Factory\ApiClientFactory::build('soap');
if ($apiClient->getClientType() === 'SOAP') {
    printf("Received SOAP API client\n");
} else {
    printf("ERROR: Not received SOAP API client\n");
}

$apiClient = DesignPatterns\Factory\ApiClientFactory::build('rest');
if ($apiClient->getClientType() === 'REST') {
    printf("Received REST API client\n");
} else {
    printf("ERROR: Not received REST API client\n");
}

try {
    DesignPatterns\Factory\ApiClientFactory::build('RPC');
    printf("ERROR: Not throwing exception when building RPC API client\n");
} catch (InvalidArgumentException $e) {
    printf("Building RPC API client throws InvalidArgumentException\n");
} catch (Exception $e) {
    printf("ERROR: Throwing incorrect exception when building RPC API client\n");
}
