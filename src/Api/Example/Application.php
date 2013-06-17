<?php

namespace Api\Example;

class Application extends \Silex\Application
{
    private $env;

    public function __construct($env)
    {
        $this->env = $env;

        $this->loadConfig();
        $this->initialize();
    }

    protected function loadConfig()
    {
        // TODO: Load configuration
    }

    protected function initialize()
    {
        $this->initializeControllers();
    }

    protected function initializeControllers()
    {
        // TODO: Initialize controllers
    }
}