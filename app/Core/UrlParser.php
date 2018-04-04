<?php

namespace App\Core;

class UrlParser {

    private $requestMethod;
    private $requestUri;
    private $controller;
    private $action;

    /**
     * UrlParser constructor.
     *
     * @param $requestMethod
     * @param $requestUri
     */
    public function __construct($requestMethod, $requestUri)
    {
        $this->requestMethod = $requestMethod;
        $this->requestUri = removeEndingSlash($requestUri);
        $this->parse();
    }

    /**
     * get controller action
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * get name of controller
     *
     * @return string
     */
    public function getController()
    {
        return CONTROLLER_NAMESPACE . $this->controller;
    }

    /**
     * parse URI
     */
    private function parse()
    {
        global $routes;
        $isAdmin = strpos($this->requestUri, 'admin') !== false;
        Session::set('admin', $isAdmin);

        $urls = $routes[strtoupper($this->requestMethod)];
        if (array_key_exists($this->requestUri, $urls)) {
            $actionMapping = $urls[$this->requestUri];
            $arr = explode('@', $actionMapping);
            $this->controller = $arr[0];
            $this->action = $arr[1];
        } else {
            if ($isAdmin) {
                redirect('/admin');
            } else {
                redirect('/');
            }
        }
    }
}