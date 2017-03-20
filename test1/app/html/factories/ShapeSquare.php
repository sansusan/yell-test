<?php

namespace factories;

class ShapeSquare extends Shape
{
    protected $size = 5;

    function __construct($params = [])
    {
        parent::__construct($params);
        if (isset($params['size']) && (int)$params['size'] >= 3)
            $this->size = (int)$params['size'];
    }

    function draw()
    {
        // рисуем квадрат
        $canvas = '';
        for ($i = 1; $i <= $this->size; $i++)
            $canvas .= "0";
        $canvas .= "\n";
        for ($i = 1; $i <= $this->size - 2; $i++) {
            $canvas .= "0";
            for ($j = 1; $j <= $this->size - 2; $j++) {
                $canvas .= " ";
            }
            $canvas .= "0\n";
        }
        for ($i = 1; $i <= $this->size; $i++)
            $canvas .= "0";

        echo '<pre style="color: ' . $this->color . '">' . $canvas . '</pre>';
    }

}