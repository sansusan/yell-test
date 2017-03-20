<?php

use core\Controller;
use core\View;

class MainController extends Controller
{
    function __construct()
    {

    }


    public function actionIndex()
    {
        $this->render('index', []);
    }
}