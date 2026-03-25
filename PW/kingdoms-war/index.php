<?php

require __DIR__ . "/../source/autoload.php";

use source\Models\Game\Character;
use source\Models\Game\Thief;
use source\Models\Game\Wizard;
use source\Models\Game\Warrior;

$personagem1 = new Character("Pedro", 10, 1, 0.5);
$personagem2 = new Thief("Rafael", 5, 2, 1, 0.2);
$personagem3 = new Warrior("LUcao", 10, 1, 1, 1);
$personagem4 = new Wizard("Murilo", 100, 100, 100, 100);

echo $personagem1->describe();
echo $personagem2->describe();
echo $personagem3->describe();
echo $personagem4->describe();
