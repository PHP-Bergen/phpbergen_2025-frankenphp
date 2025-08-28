<?php

use phpbergen\app\Bootstrap;
use phpbergen\app\Render;

require_once __DIR__ . '/../vendor/autoload.php';

$boot = new Bootstrap();
$render = new Render();
$page = $render->render('h1', 'Hello PHP Bergen in worker mode');

// Prevent the worker from stopping if the client disconnects
ignore_user_abort(true);

// --- Boot once (outside the loop) ---
$startedAt = date('c');
$pid = getmypid();
$requestCount = 0;

// The per-request handler (superglobals reset each request)
$handler = static function () use (&$requestCount, $pid, $startedAt, $page) {
  $requestCount++;
  header('Content-Type: text/html; charset=utf-8');
  echo $page;
  echo '<pre>';
  echo 'PID: ' . $pid . "\n";
  echo 'Request count: ' . $requestCount . "\n";
  echo 'Started at: ' . $startedAt . "\n";
  echo '</pre>';
};

$maxRequests = (int)($_SERVER['MAX_REQUESTS'] ?? 0);

// --- Long-running loop ---
for ($n = 0; !$maxRequests || $n < $maxRequests; $n++) {
  $keepRunning = frankenphp_handle_request($handler);
  gc_collect_cycles();

  if (!$keepRunning) {
    break;
  }
}
