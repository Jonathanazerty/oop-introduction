<?php

class Beverage
{
    public float $price;
    public string $color;
    public string $temperature;

    public function __construct( float $price, string $color, string $temperature ="cold")
    {
        $this->price  = $price;
        $this->color  = $color;
        $this->temperature  = $temperature;
    }

    public function getInfo()
    {
       echo "This beverage is {$this->temperature} and {$this->color}. Price : {$this->price} €<br>";
    }
};