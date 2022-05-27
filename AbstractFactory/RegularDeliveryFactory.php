<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

class RegularDeliveryFactory implements AbstractFactoryInterface {

    public function createDeliveryService(): DeliveryServiceInterface{
        return new RegularDeliveryService();
    }

    public function createCargo(): CargoInterface {
        return new NormalCargo();
    }
}
?>