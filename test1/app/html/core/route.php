<?php

namespace core;

class Route
{

    function __construct()
    {

    }

    public static function Start()
    {
        $controller_name = 'main';
        $action_name = 'index';

        $route_array = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($route_array[1])) {
            $controller_name = strtolower($route_array[1]);
        }

        if (!empty($route_array[2])) {
            $action_name = strtolower($route_array[2]);
        }

        $controller_name = ucfirst($controller_name) . 'Controller';
        $action_name = 'action' . ucfirst($action_name);

        foreach (glob(ROOT_PATH . "/html/models/*.php") as $filename) {
            if (file_exists($filename)) {
                include $filename;
            }
        }

        foreach (glob(ROOT_PATH . "/html/factories/*.php") as $filename) {
            if (file_exists($filename))
                include $filename;
        }

        if (file_exists(ROOT_PATH . '/html/controllers/' . $controller_name . '.php')) {
            include ROOT_PATH . '/html/controllers/' . $controller_name . '.php';
        } else {
            header('Location: /error/404');
            exit;
        }

        $controller = new $controller_name();

        if (!method_exists($controller, $action_name)) {
            header('Location: /error/404');
            exit;
        }

        $controller->$action_name();
    }

}
