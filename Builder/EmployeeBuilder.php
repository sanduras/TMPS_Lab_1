<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

use DateTime;

class EmployeeBuilder implements Builder {

    private $employee;
    const BR = '<br />';
    

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function setPosition() {

        $this->employee->position = "Manager". self::BR;
    }

    public function setPoints() {
        $this->employee->points = "Miadora". self::BR;
    }
    
    public function setMeeting(){
        $date = new DateTime('2022-04-21');
        $this->employee->meeting = $date->format('Y-m-d H:i:s'). self::BR;
    }
    
    public function setDailyResponsabilities(){

        $this->employee->responsabilities = "Make list with company needs ". self::BR;
    }

    public function getEmployee() {

        return $this->employee;
    }
}
?>
