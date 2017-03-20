<?php

use core\Controller;

class ErrorController extends Controller
{

    function __construct()
    {

    }

    public function action404()
    {
        $this->render('404');
    }

}