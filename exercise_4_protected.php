<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    protected $color;
    protected $price;
    protected $temperature = 'cold';
    protected $name;

    public function __construct(string $name, string $color, float $price, string $temperature = 'cold') {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        echo "This beverage is $this->temperature and $this->color.";
    }

    public function getColor() {
        return $this->color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getName() {
        return $this->name;
    }
}

class Beer extends Beverage {
    protected $alcoholPercentage;

    public function __construct(string $name, string $color, float $alcoholPercentage, float $price) {
        parent::__construct($name, $color, 0, 'cold');
        $this->alcoholPercentage = $alcoholPercentage;
        $this->price = $price;
    }

    public function getAlcoholPercentage() {
        return $this->alcoholPercentage;
    }

    public function getInfo() {
        echo "This beer is a {$this->getName()} with alcohol percentage {$this->getAlcoholPercentage()}, the price of this beer is €{$this->getPrice()}.<br>";
        echo "Color: " . $this->getColor() . "<br>";
    }
}

$Duvel = new Beer("Duvel", "blond", 8.5, 3.5);
echo $Duvel->getInfo();