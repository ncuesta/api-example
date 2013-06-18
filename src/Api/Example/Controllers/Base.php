<?php

namespace Api\Example\Controllers;

use \Api\Example\Application;


abstract class Base
{
    protected $app;

    public function registerOn(Application $app)
    {
        $this->app = $app;

        return $this->register();
    }

    abstract protected function register();
}
