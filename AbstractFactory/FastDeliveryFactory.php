<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

class FastDeliveryFactory implements AbstractFactoryInterface {

    public function createDeliveryService(): DeliveryServiceInterface{
        return new FastDeliveryService();
    }

    public function createCargo(): CargoInterface {
        return new ColdCargo();
    }
}
?>