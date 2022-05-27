<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

abstract class Factory {

    /*Method for get concrete Product */
    abstract public function getProduct(): Drink;

    public function deliveryDrink ( $cantity, $location, $price): void 
    {
        $product = $this->getProduct();
    
        $product->makeOrder($cantity);
        $product->delivery($location);
        $product->pay($price,$cantity);
    }
}
?>