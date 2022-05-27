<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

use DateTime;

class AccountantBuilder implements Builder {

    private $accountant;
    const BR = '<br />';
    

    public function __construct(Accountant $accountant)
    {
        $this->accountant = $accountant;
    }

    public function setPosition() {

        $this->accountant->position = "Accoutant". self::BR;
    }

    public function setPoints() {
        $this->accountant->points = "Kubera S.R.L". self::BR;
    }
    
    public function setMeeting(){
        $date = new DateTime('2022-04-22');
        $this->accountant->meeting = $date->format('Y-m-d H:i:s'). self::BR;
    }
    
    public function setDailyResponsabilities(){

        $this->accountant->responsabilities = "Perform monthly calculations  ". self::BR;
    }

    public function getEmployee() {

        return $this->accountant;
    }
}
?>