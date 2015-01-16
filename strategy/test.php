<?php

/**
 * The main idea is that ApiTest object may work with different API clients.
 *
 * In this simple example there are clients for different API versions, but they could be clients for SOAP, or REST API.
 *
 * As long as they both implement ApiClientInterface, ApiTest object may use them and get the information it needs.
 */

require_once __DIR__ . '/../vendor/autoload.php';

$apiClientV1 = new \Strategy\ApiClientV1();
$apiTest = new \Strategy\ApiTester($apiClientV1);

if ($apiTest->isApiWorking()) {
    printf("API version %s is working\n", $apiTest->getApiVersion());
}

$apiClientV2 = new \Strategy\ApiClientV2();
if ($apiTest->setApiClient($apiClientV2)->isApiWorking()) {
    printf("API version %s is working\n", $apiTest->getApiVersion());
}
