<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

class Coke implements Drink {
    
    const BR = '<br />';

    public function makeOrder($cantity): void
    {
        echo "The order of Coke and with $cantity is processed! ". self::BR;
    }

    public function delivery($location): void
    {
        echo "The company make a delivery of Coke at $location  ". self::BR;
    }
    
    public function pay($price, $cantity): void
    {
        echo " You need to pay for Coke for $cantity with that $price for one unity ". self::BR;
    }
}

?>