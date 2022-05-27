<?php

declare (strict_types=1);

namespace CreationalPatterns\Factory;

class SweetWaterFactory extends Factory
{
    public function getProduct(): Drink
    {
        return new  Coke();
    }
}
?>