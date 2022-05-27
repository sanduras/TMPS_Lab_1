<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

require_once '../vendor/autoload.php';

function clientCode(Factory $factory, $cantity, $location, $price): void
{
    $factory->deliveryDrink($cantity, $location, $price);
}
clientCode(new SweetWaterFactory, 20, "Ismail 22/1", 22);
ECHO "<br/>";
clientCode(new AlchoolFactory, 5, "Alecu Russo 3/1", 85);
ECHO "<br/>";
clientCode(new EnergyDrinkFactory, 8, "Miron Costin 15/1", 36);