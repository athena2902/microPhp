<?php

namespace App\Core;

class Route
{
    /**
     * get request
     *
     * @param $uri
     * @param $actionMapping
     */
    public static function get($uri, $actionMapping)
    {
        global $routes;
        if (!isset($routes['GET'])) {
            $routes['GET'] = [];
        }
        $routes['GET'][$uri] = $actionMapping;
    }

    /**
     * post request
     *
     * @param $uri
     * @param $actionMapping
     */
    public static function post($uri, $actionMapping)
    {
        global $routes;
        if (!isset($routes['POST'])) {
            $routes['POST'] = [];
        }
        $routes['POST'][$uri] = $actionMapping;
    }

    /**
     * put request
     *
     * @param $uri
     * @param $actionMapping
     */
    public static function put($uri, $actionMapping)
    {
        global $routes;
        if (!isset($routes['PUT'])) {
            $routes['PUT'] = [];
        }
        $routes['PUT'][$uri] = $actionMapping;
    }

    /**
     * delete request
     *
     * @param $uri
     * @param $actionMapping
     */
    public function delete($uri, $actionMapping)
    {
        global $routes;
        if (!isset($routes['DELETE'])) {
            $routes['DELETE'] = [];
        }
        $routes['DELETE'][$uri] = $actionMapping;
    }
}