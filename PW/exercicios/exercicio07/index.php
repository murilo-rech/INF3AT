<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\Bhaskara;
use source\Models\Math\PythagoreanTheorem;

$pitagoras = new PythagoreanTheorem(1, 2);
$pitagoras2 = new PythagoreanTheorem(3, 4);

$baskara = new Bhaskara(2, 8, 4);
$baskara2 = new Bhaskara(3, 2, 6);

$pitagoras->calculate();
$pitagoras->show();

$pitagoras2->calculate();
$pitagoras2->show();

$baskara->calculate();
$baskara->show();

$baskara2->calculate();
$baskara2->show();