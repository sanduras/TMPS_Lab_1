<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

require_once '../vendor/autoload.php';

function clientCode(array $factories) {
    foreach($factories as $factory){
        $deliveryService = $factory->createDeliveryService();
        $cargo = $factory->createCargo();
        $cargo->getContentCargo();
        $deliveryService->sendCargo($cargo);
    }
}
    
$factories = [
    new RegularDeliveryFactory,
    new FastDeliveryFactory
    ];

clientCode($factories);
?>