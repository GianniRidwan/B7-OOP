<?php

class Pikachu extends Pokemon {
    public function __construct($name) {
        $energyType = "Lightning";
        $hitpoints = 60;
        $health = 0;
        $attack = [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)];
        $weakness = new Weakness('Fire', 1.5);
        $resistance = new Resistance('Fighting', 20);
        parent::__construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance);
    }
}