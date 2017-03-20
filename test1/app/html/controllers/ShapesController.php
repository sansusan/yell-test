<?php

use core\Controller;
use factories\ShapeFactory;

class ShapesController extends Controller
{
    function __construct()
    {

    }


    public function actionPaint()
    {
        // считаем, что данные пришли POST запросом

        $data = [
            ['type' => 'circle', 'params' => ['color' => '#FF0000', 'radius' => 4]],
            ['type' => 'square', 'params' => ['color' => '#00FF00', 'size' => 4]],
            ['type' => 'circle', 'params' => ['color' => '#0000FF', 'radius' => 8]],
            ['type' => 'square', 'params' => ['color' => '#999900', 'size' => 8]],
        ];

        $shapes = [];

        foreach ($data as $row) {
            if (isset($row['type'])) {
                $shape = ShapeFactory::build($row['type'], isset($row['params']) ? $row['params'] : null);
                $shapes[] = $shape;
            }
        }

        $this->render('paint', $shapes);
    }
}