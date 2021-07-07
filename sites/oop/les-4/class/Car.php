<?php

class Car
{
    public $color;
    public $wheels;
    public $speed = 180;
    public $brand;

    /**
     * Car constructor.
     * @param $color
     * @param int $wheels
     * @param $speed
     * @param $brand
     */
    public function __construct($color, $speed, $brand, $wheels = 4)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getCarInfo(): string
    {
        return "<h3> О моем авто:</h3>
                Марка: {$this->brand}<br>
                Цвет: {$this->color}<br>
                Кол-во колес: {$this->wheels}<br>
                Скорость: {$this->speed}<br>";
    }
}