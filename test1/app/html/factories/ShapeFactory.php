<?php

namespace factories;

class ShapeFactory
{

    /**
     * @param string $shapeType
     * @param array|null $params
     * @return Shape
     * @throws \Exception
     */
    public static function build($shapeType, $params = null)
    {
        $shape = __NAMESPACE__ . '\Shape' . ucfirst(strtolower($shapeType));

        if (class_exists($shape)) {
            return new $shape($params);
        } else {
            throw new \Exception("Неверный тип фигуры");
        }
    }
}