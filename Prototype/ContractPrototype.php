<?php

declare (strict_types=1);

namespace CreationalPatterns\Prototype;

abstract class ContractPrototype {

    protected $title;
    
    protected $obligation;

    abstract function __clone();

    function getTitle() {

        return $this->title;
    }
    function setTitle($title) {

        $this->title = $title;
    }
    function getObligation() {

        return $this->obligation;
    }
}
?>