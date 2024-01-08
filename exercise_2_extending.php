<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    public $color;
    public $price;
    public $temperature = 'cold';
    public $name;

    function __construct(string $name, string $color, float $price, string $temperature = 'cold') {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo() {
        echo "This beverage is $this->temperature and $this->color.";
    }
}

$cola = new Beverage("Cola", "black", 2);
echo $cola->getInfo();
echo "<br>";
echo $cola->temperature;
echo "<br>";
echo "<br>";

class Beer extends Beverage {
    public $alcoholPercentage;

    function __construct(string $name, string $color, float $alcoholPercentage, float $price) {
        // Assuming default temperature for Beer is 'cold'
        parent::__construct($name, $color, 0, 'cold'); // Setting default $price as 0

        $this->alcoholPercentage = $alcoholPercentage;
        $this->price = $price;
    }

    function getInfo() {
        echo "This beer is a $this->name with alcohol percentage $this->alcoholPercentage, the price of this beer is €$this->price.";
    }
}

$Duvel = new Beer("Duvel", "blond", 8.5, 3.5);
echo $Duvel->getInfo() . "<br>";
echo $Duvel->alcoholPercentage . "<br>";
echo "Color: " . $Duvel->color . "<br>";