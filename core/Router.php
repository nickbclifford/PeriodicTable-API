<?php

namespace app;

use app\core\ApiException;

class Router
{
    private $routes;

    public function __construct(array $config)
    {
        $this->routes = $config['routes'];
    }

    public function fetch(array $requestData)
    {
        if (!isset($requestData['mode'])) {
            throw new ApiException('No mode specified. Please try again!');
        }

        $route = $requestData['mode'];

        if (empty($this->routes[$route])) {
            throw new ApiException('Invalid mode. Please try again!');
        }

        return (new Controller($requestData))->execute($this->routes[$route]);
    }
}
