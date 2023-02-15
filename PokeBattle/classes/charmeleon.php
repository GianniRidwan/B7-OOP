<?php

class Charmeleon extends Pokemon {
    public function __construct($name) {
        $energyType = 'Fire';
        $hitpoints = 60;
        $health = 0;
        $attack = [ new Attack('Head Butt', 10), new Attack('Flare', 30)];
        $weakness = new Weakness('Water', 2);
        $resistance = new Resistance('Lightning', 10);
        parent::__construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance);
    }
}