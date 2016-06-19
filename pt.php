<?php

require_once('core/ApiException.php');
require_once('core/Router.php');
require_once('core/BaseController.php');
require_once('Controller.php');

use \app\Router;
use \app\core\ApiException;

$config = require_once('config.php');

try {
    $response = (new Router($config))->fetch($_GET);
} catch (ApiException $e) {
    $response = ['error' => $e->getMessage()];
} catch (\Exception $e) {
    $response = ['error' => 'Unknown error'];
    @file_put_contents(
        './logs/errors.log',
        $e->getCode() . ":\t" .
        $e->getMessage() . PHP_EOL .
        $e->getFile() . PHP_EOL .
        $e->getLine() . PHP_EOL .
        $e->getTraceAsString() . PHP_EOL
    );
}

// echos the array as JSON
header('Content-Type: application/json');
echo json_encode($response);
