<?php

class Weakness {
    public $name;
    public $multiply;

    public function __construct($name, $multiply) {
        $this->name = $name;
        $this->multiply = $multiply;
    }
}