<?php
class Avenger extends Superhero {
    public function __construct($name, $gender, $oneliner) {
        $team = "Avengers";
        parent::__construct($name, $gender, $team, $oneliner);
    }
}