<?php

$examples = glob(__DIR__ . '/../*/example.php');

foreach ($examples as $example) {
    preg_match('/\/([a-z]+)\/example\.php$/i', $example, $match);
    $designPattern = $match[1];
    printf("\n--- %s ---\n\n", strtoupper($designPattern));
    include $example;
    print PHP_EOL;
}
