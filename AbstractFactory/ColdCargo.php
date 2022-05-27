<?php

declare (strict_types=1);

namespace CreationalPatterns\AbstractFactory;

class ColdCargo implements CargoInterface {
    const BR = '<br />';
    public function getContentCargo(): void
    {
        echo "Your cargo is cold ..." . self::BR;
    }
}
?>