<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

class EnergyDrinkFactory extends Factory
{
    public function getProduct(): Drink
    {
        return new Energy();
    }
}
?>