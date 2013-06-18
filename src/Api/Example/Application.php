<?php

namespace Api\Example;


class Application extends \Silex\Application
{
    private $env;

    public function __construct($env)
    {
        parent::__construct();

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
        foreach ($this->getControllers() as $controller) {
            $controller->registerOn($this);
        }
    }

    private function getControllers()
    {
        return array(
            new Controllers\Cities
        );
    }
}