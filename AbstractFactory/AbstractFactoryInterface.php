<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

interface AbstractFactoryInterface {
    public function createDeliveryService(): DeliveryServiceInterface;
    public function createCargo(): CargoInterface;
}

?>