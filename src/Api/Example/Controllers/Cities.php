<?php

namespace Api\Example\Controllers;

use Api\Example\Application;


class Cities extends Base
{
    protected function register()
    {
        // GET /cities
        $this->app->get('/cities', array($this, 'cities'));

        // GET /cities/1
        $this->app->get('/cities/{id}', array($this, 'city'));
    }

    public function cities()
    {
        // TODO
        return $this->app->json(array());
    }

    public function city($id)
    {
        // TODO
        return $this->app->json(new \stdClass);
    }
}
