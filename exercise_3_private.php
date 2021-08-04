<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


class beers extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    public function __construct( float $price, string $color, string $temperature, string $name, float $alcoholpercentage)
    {
        parent::__construct( $price, $color, $temperature="cold");
        $this->name = $name;
        $this->alcoholpercentage  = $alcoholpercentage;
    }

    public function getAlcoholpercentage ()
    {
        return "The {$this->name} is {$this->temperature} and {$this->color}. Price : {$this->price} € and has an alcohol percentage of {$this->alcoholpercentage} % <br>";
        echo "The {$this->name} is {$this->temperature} and {$this->color}. Price : {$this->price} € and has an alcohol percentage of {$this->alcoholpercentage} % <br>";
    }

    public function changeColor($color)
    {
        return $this->color = $color;
    }

    private function beerInfo ()
    {
        echo "Hi i'm {$this->name} and have an alcohol percentage of {$this->alcoholpercentage}% and I have a {$this->color} color.<br>";
    }

    public function getBeerInfo ()
    {
        return $this->beerInfo();
    }

};

$Duvel = new beers ( 3.5, 'blond', '', 'Duvel', 8.5 );

$Duvel -> changeColor('light');
$Duvel -> getBeerInfo();