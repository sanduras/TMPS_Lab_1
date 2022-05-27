<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

class Director {

    public function  create(Builder $builder)
    {
        $builder->setPosition();
        
        $builder->setPoints();

        $builder->setMeeting();

        $builder-> setDailyResponsabilities();



        return $builder->getEmployee();
    }
}

?>
