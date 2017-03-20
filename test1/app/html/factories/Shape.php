<?php

namespace factories;

abstract class Shape
{
    protected $type = null;
    protected $color = '#000000';


    function __construct($params)
    {
        $className = (new \ReflectionClass($this))->getShortName();
        $this->type = strtolower(str_replace('Shape', '', $className));

        if (isset($params['color']))
            $this->color = $params['color'];
    }

    /**
     * @return string
     */
    abstract function draw();


    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }


    protected static function getSpace($count)
    {
        $result = '';
        for ($i = 0; $i < $count; $i++) {
            $result .= ' ';
        }
        return $result;
    }
}