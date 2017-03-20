<?php

namespace factories;

class ShapeCircle extends Shape
{
    protected $radius = 5;

    function __construct($params = [])
    {
        parent::__construct($params);
        if (isset($params['radius']) && (int)$params['radius'] >= 3)
            $this->radius = (int)$params['radius'];
    }


    function draw()
    {
        // рисуем круг
        $canvas = self::getSpace($this->radius / 4);
        for ($i = 1; $i <= $this->radius / 2; $i++)
            $canvas .= "0";
        $canvas .= "\n";
        for ($i = 1; $i <= $this->radius - 2; $i++) {
            $canvas .= "0";
            for ($j = 1; $j <= $this->radius - 2; $j++) {
                $canvas .= " ";
            }
            $canvas .= "0\n";
        }

        $canvas .= self::getSpace($this->radius / 4);
        for ($i = 1; $i <= $this->radius / 2; $i++)
            $canvas .= "0";

        echo '<pre style="color: ' . $this->color . '">' . $canvas . '</pre>';
    }

}