<?php

namespace source\Models\Company;


class Employee extends \source\models\User {

    private float $hoursWorked;
    private float $hourValue;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, float $hoursWorked = null, float $hourValue = null) {
        parent::__construct($id, $name, $email, $password);
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = $hourValue;      
    }
    public function getHoursWorked(): ?float
    {
        return $this->hoursWorked;
    }
    public function getHourValue(): ?float
    {
        return $this->hourValue;
    }

    public function setHoursWorked(float $hoursWorked = null): ?float
    {
        $this->hoursWorked = $hoursWorked;
    }
    public function setHourValue(float $hourValue = null): ?float
    {
        $this->hourValue = $hourValue;
    }

    public function calculateSalary():?float
    {
        return $this->hoursWorked * $this->hourValue;
    }

    public function show(): ?string
    {
        return "<br>Funcionário: #{$this->getId()} - Nome: {$this->getName()}<br>
                Email: {$this->getEmail()}<br>
                Horas Trabalhadas: {$this->getHoursWorked()}<br>
                Valor da Hora: R$ {$this->getHourValue()}<br>
                Salário: R$ {$this->calculateSalary()}<br>";
    }
}