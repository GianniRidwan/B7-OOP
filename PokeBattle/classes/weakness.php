<?php

class Weakness {
    private $name;
    private $multiply;

    public function __construct($name, $multiply) {
        $this->name = $name;
        $this->multiply = $multiply;
    }

    public function getName(){
        return $this->name;
    }

    public function getMultiply(){
        return $this->multiply;
    }
}