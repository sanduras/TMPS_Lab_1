<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

class FastDeliveryService implements DeliveryServiceInterface {
    const BR = "<br />";

    public function sendCargo(CargoInterface $cargo): void
    {
        echo "Your cargo will be send fast ....".self::BR;
        echo self::BR;
    }
}
?>