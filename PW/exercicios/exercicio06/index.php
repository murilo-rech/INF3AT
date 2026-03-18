<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Course\Instructor;
use source\Models\Course\Course;

$instructor = new Instructor(1, "Murilo", "murilo", "1234567", "Engenheiro de Software", "Instrutor de cursos online");
$course = new Course(1, "Curso de PHP", "40 horas", $instructor);
$course->show();
$instructor->show();