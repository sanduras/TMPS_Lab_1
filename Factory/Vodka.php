<?php

declare (strict_types=1);

namespace CreationalPatterns\Factory;

class Vodka implements Drink {
    const BR = '<br />';
    public function makeOrder($cantity): void
    {
        echo "The order of Vodka and with $cantity is processed!". self::BR;
    }

    public function delivery($location): void
    {
        echo "The company make a delivery of Vodka at $location ". self::BR;
    }
    
    public function pay($price, $cantity): void
    {
        echo " You need to pay for Vodka for $cantity with that $price for one unity ". self::BR;
    }
}