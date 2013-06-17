<?php

ini_set('display_errors', 0);

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Api\Example\Application('prod');
$app->run();
