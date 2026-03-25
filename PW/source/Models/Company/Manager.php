<?php

namespace source\Models\Company;

class Manager extends Employee
{
    private float $bonus;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, float $hoursWorked = null, float $hourValue = null, float $bonus = null) {
        parent::__construct($id, $name, $email, $password, $hoursWorked, $hourValue);
        $this->bonus = $bonus;
    }
    public function getBonus(): ?float
    {
        return $this->bonus;
    }
    public function setBonus(float $bonus): ?float
    {
        $this->bonus = $bonus;
    }

    public function calculateSalary(): ?float
    {
        return parent::calculateSalary() + $this->getBonus();
    }
    public function show(): ?string
    {
        return "<br>Gerente: #{$this->getId()} - Nome: {$this->getName()} <br>
                Email: {$this->getEmail()}<br>
                Horas Trabalhadas: {$this->getHoursWorked()}<br>
                Valor da Hora: R$ {$this->getHourValue()}<br>
                Salário Base: R$ ".parent::calculateSalary()."<br>
                Bônus Fixo: R$ {$this->getBonus()}<br>
                Salário Total: R$ {$this->calculateSalary()}<br>";
    }
}