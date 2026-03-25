<?php

namespace source\Models\Company;

class Seller extends Employee
{
    private float $totalSales;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, float $hoursWorked = null, float $hourValue = null, float $totalSales = null) {
        parent::__construct($id, $name, $email, $password, $hoursWorked, $hourValue);
        $this->totalSales = $totalSales;
    }
    public function getTotalSales(): ?float 
    {
        return $this->totalSales;
    }
    public function setTotalSales(float $totalSales): ?float
    {
        $this->totalSales = $totalSales;
    }
    public function calculateCommission(): ?float
    {
        return $this->totalSales * 0.1;
    }
    public function calculateSalary(): ?float
    {
        return parent::calculateSalary() + $this->calculateCommission();
    }
    public function show(): ?string
    {
        return "<br>Vendedor: #{$this->getId()} - Nome: {$this->getName()}<br>
                Email: {$this->getEmail()}<br>
                Horas Trabalhadas: {$this->getHoursWorked()}<br>
                Valor da Hora: R$ {$this->getHourValue()}<br>
                Salário Base: R$ ".parent::calculateSalary()."<br>
                Total de Vendas: R$ {$this->getTotalSales()}<br>
                Comissão (10%): R$ {$this->calculateCommission()}<br>
                Salário Total: R$ {$this->calculateSalary()}<br>";
    }
}