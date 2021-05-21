<?php

$weapons = ['fist', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

if ($opponentWeapon == 'fist'){
    $indyWeapon = 'gun';
} elseif ($opponentWeapon == 'whip'){
    $indyWeapon = 'fist';
} else {
    $indyWeapon = 'whip';
}

echo 'While the enemy took his ' . $opponentWeapon . ', Indiana Jones drew his ' . $indyWeapon . '!';