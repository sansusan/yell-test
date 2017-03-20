<?php

namespace core;


class Controller
{

    function __construct()
    {
        
    }

    /**
     * @param string $view
     * @param array $data
     */
    public function render($view, $data = [])
    {
        $controllerName = strtolower(str_replace('Controller', '', get_class($this)));
        $view = ROOT_PATH . '/html/views/' . $controllerName . '/' . $view . '.php';
        include ROOT_PATH . '/html/views/layouts/default.php';
    }

}