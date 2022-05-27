<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

require_once '../vendor/autoload.php';

function clientCode() {
    $employee = (new Director())->create(new EmployeeBuilder(new Employee ) );
    $accountant = (new Director())->create(new AccountantBuilder(new Accountant) );
    print_r($employee);
    echo "<hr/>";
    print_r($accountant);

}
clientCode();
?>
