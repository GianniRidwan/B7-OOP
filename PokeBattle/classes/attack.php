<?php

class Attack {
    private $name;
    private $damage;
  
    public function __construct($name, $damage) {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function getName(){
        return $this->name;
    }

    public function getDamage(){
        return $this->damage;
    }
}