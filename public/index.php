<?php

use phpbergen\app\Bootstrap;
use phpbergen\app\Render;

require_once __DIR__ . '/../vendor/autoload.php';

$boot = new Bootstrap();
$render = new Render();
$page = $render->render('h1', 'Hello PHP Bergen. Running in classic mode.');

print ($page);
