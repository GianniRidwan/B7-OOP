<?php

class pokemon {
    public $name;
    public $energyType;
    public $hp;
    public $maxHP;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name) {
        $this->name = $name;
    }
    public function __toString() {
        return json_encode($this);
    }
    public function test() {
        echo '<h2>' . $this->name . '</h2>';
    }
}