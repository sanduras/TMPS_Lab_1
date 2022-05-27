<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

class RegularDeliveryService implements DeliveryServiceInterface {
    const BR = '<br />';

    public function sendCargo(CargoInterface $cargo): void
    {
        echo "Your cargo will be send regular ....".self::BR;
        echo self::BR;
    }
}
?>