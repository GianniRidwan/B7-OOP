<?php

spl_autoload_register(function($class) {
    require_once "classes/{$class}.php";
});

$pika = new Pikachu('Pikachu');
$char = new Charmeleon('Charmeleon');

echo $char->getName() . " : " .  $char->getHealth() . "<br>";
echo $pika->getName() . " : " .  $pika->getHealth() . "<br><br>";

$pika->attack($pika->getAttack(0), $char);
echo $pika->getName() . " used Electric Ring!<br>Not very effective!<br><br>";
echo $char->getName() . " : " .  $char->getHealth() . "<br><br>";

$char->attack($char->getAttack(1), $pika);
echo $char->getName() . " used Flare!<br>It's super effective!<br><br>";
echo $pika->getName() . " : " .  $pika->getHealth() . "<br>";