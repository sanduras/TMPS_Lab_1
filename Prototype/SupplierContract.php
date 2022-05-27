<?php

declare (strict_types=1);

namespace CreationalPatterns\Prototype;

class SupplierContract extends ContractPrototype {
    function __construct() {
        $this->obligation = 'Respect obligation with cargo';
    }
    function __clone() {
    }
}
?>