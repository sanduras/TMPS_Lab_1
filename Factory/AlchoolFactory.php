<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

class AlchoolFactory extends Factory
{
    public function getProduct(): Drink
    {
        return new Vodka();
    }
}

?>