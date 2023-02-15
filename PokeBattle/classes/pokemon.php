<?php

class Pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attack;
    private $weakness;
    private $resistance;
    public static $totalPokemons = 0;

    public function __construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$totalPokemons++;
    }

    public static function getPopulation() {
        return Pokemon::$totalPokemons;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function getName() {
        return $this->name;
    }

    public function getEnergy() {
        return $this->energyType;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function getResistance() {
        return $this->resistance;
    }

    public function getAttack($i) {
        return $this->attack[$i];
    }

    public function attack($attack, $target) {
        $attackingEnergy = $this->getEnergy();
        $damageReduce = $target->checkResist($attackingEnergy);
        $damageMultiplier = $target->checkWeakness($attackingEnergy);
        $damageDone = $attack->damage;
        if ($damageReduce) {
            $damageDone = $damageDone - $damageReduce;
        }
        if ($damageMultiplier) {
            $damageDone = ($damageDone * $damageMultiplier);
        }
        $target->damage($damageDone);
    }
      
    public function damage($damageDone) {
        $newHealth = $this->getHealth() - $damageDone;
        $this->setHealth($newHealth);
            if ($this->getHealth() <= 0) {
                Pokemon::$totalPokemons--;
            }
    }

    public function checkResist($attackingEnergy) {
        if ($this->getResistance()->name == $attackingEnergy) {
            $damageReduce = $this->getResistance()->value;
            return $damageReduce;
        } else {
            return;
        }
    }

    public function checkWeakness($attackingEnergy){
        if ($this->getWeakness()->name == $attackingEnergy) {
            $damageMultiplier = $this->getWeakness()->multiply;
            return $damageMultiplier;
        } else {
            return;
        }
    }

    public function __toString() {
        return json_encode($this);
    }
}