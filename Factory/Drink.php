<?php

declare(strict_types=1);

namespace CreationalPatterns\Factory;

interface Drink {
    
    public function makeOrder($cantity): void;
    public function delivery($location): void;
    public function pay($price,$cantity): void;

}
?>