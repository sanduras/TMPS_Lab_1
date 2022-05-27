<?php

declare (strict_types=1);

namespace CreationalPatterns\Prototype;

require_once '../vendor/autoload.php';

function codeClient() {
    $delivery = new DeliveryContract();
    $supplier = new SupplierContract();

    $delivery1 = clone $delivery;
    $delivery1->setTitle('Delivery Services for Nr.1');

    echo "The cloned object is: ";
    print_r($delivery1);
    echo "<br />";

    $supplier1 = clone  $supplier;
    $supplier1->setTitle('Contract for the supply of textile goods');

    echo "The cloned object is: ";
    print_r($supplier1);
    echo "<br />";
}
codeClient()
?>
