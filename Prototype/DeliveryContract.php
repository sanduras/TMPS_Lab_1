<?php

declare (strict_types=1);

namespace CreationalPatterns\Prototype;

class DeliveryContract extends ContractPrototype {

    function __construct() {

        $this->obligation = 'Make regular delivery ...';
    }
    function __clone() {
    }
}
?>