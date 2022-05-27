<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

interface Builder {

    public function setPosition();

    public function setPoints();
    
    public function setMeeting();

    public function setDailyResponsabilities();

    public function getEmployee();

}
?>
