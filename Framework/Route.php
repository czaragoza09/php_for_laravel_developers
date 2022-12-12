<?php

namespace Framework;

// NO -> $routes-> routes -> Getter setters
//SI -> SET $routes->define($routers)
class Route
{
    protected $routes = [];
    public function register($route)
    {
        $this->routes[] = $route;
    }

    public function define($routes)
    {
        $this->routes=$routes;
    }

    public function redirect($url)
    {
        return $this->routes[$url];

    }
}