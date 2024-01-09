<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    // Properties / Fields
    private $color = 'red';
    private $price;
    private $temperature = 'cold';
    private $name;

    function __construct(string $name, string $color, float $price, string $temperature) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo() {
        echo "This beverage is $this->temperature and $this->color.";
    }
}

class Beer extends Beverage {
    private $alcoholPercentage;
    private $color = 'red';
    private $price;
    private $temperature = 'cold';
    private $name;

    function __construct(string $name, string $color, float $alcoholPercentage, float $price) {
        parent::__construct($name, $color, $price, 'cold');
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo() {
        echo "This beer is a {$this->name} with alcohol percentage {$this->alcoholPercentage}%, the price of this beer is €{$this->price}.";
    }
}

$Duvel = new Beer("Duvel", "light", 8.5, 3.5);
$Duvel->getInfo();

