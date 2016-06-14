<?php

namespace app\core;

class BaseController
{
    protected $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function execute($method)
    {
        if (!method_exists($this, $method)) {
            throw new \Exception('Invalid config');
        }

        return call_user_func([$this, $method]);
    }
}
