<?php

class Beverage
{
    public string $beverage;
    public float $price;
    public string $color;
    public string $temperature;

    public function __construct(string $beverage, float $price, string $color, string $temperature ="cold")
    {
        $this->beverage = $beverage;
        $this->price  = $price;
        $this->color  = $color;
        $this->temperature  = $temperature;
    }

    public function getInfo()
    {
       echo "The {$this->beverage} is {$this->temperature} and {$this->color}. Price : {$this->price} €<br><br>";
    }
};