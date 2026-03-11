<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Hospital\Doctor;
use source\Models\Hospital\Patient;
use source\Models\User;


$patient = new Patient(1, "Murilo", "murilo", "12/01/2009", "tem dor na mente");

$patient->show();

$doctor = new Doctor(1,"RADRO", "radro", "1234567","Dar remedinhos para as dores nas mentes");

$doctor->show();