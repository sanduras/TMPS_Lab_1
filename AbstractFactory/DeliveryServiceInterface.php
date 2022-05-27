<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

interface DeliveryServiceInterface {
    public function sendCargo(CargoInterface $cargo): void;
}
?>