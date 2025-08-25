<?php

use phpbergen\app\Bootstrap;

require_once __DIR__ . '/../vendor/autoload.php';

$myApp = new Bootstrap();
$handler = static function () use ($myApp) {
    // Called when a request is received,
    // superglobals, php://input and the like are reset
    echo $myApp->handle($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
};
$maxRequests = (int)($_SERVER['MAX_REQUESTS'] ?? 0);

for ($nbRequests = 0; !$maxRequests || $nbRequests < $maxRequests; ++$nbRequests) {
    $keepRunning = frankenphp_handle_request($handler);

    // Do something after sending the HTTP response
    $myApp->terminate();

    // Call the garbage collector to reduce the chances of it being triggered in the middle of a page generation
    gc_collect_cycles();

    if (!$keepRunning) {
        break;
    }
}

// Cleanup
$myApp->shutdown();
