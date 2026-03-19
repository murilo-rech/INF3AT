<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Faq\Type;
use source\Models\Faq\Question;

$type1 = new Type(1, "Inscrições");
$type2 = new Type(2, "Sobre o Evento");

$question1 = new Question(
    1,
    "Como faço para me inscrever?",
    "Você pode se inscrever acessando a aba 'Inscrições' no menu principal.",
    $type1);

$question2 = new Question(
    2,
    "Onde será o evento?",
    "O evento ocorrerá no pavilhão principal.",
    $type2);

$type1->setName("Inscrições Abertas");
$question2->setAnswer("O evento ocorrerá no pavilhão principal e no auditório A.");

echo $question1->show();
echo "<br>";
echo $question2->show();
