<?php

namespace source\Models\Hospital;

class Doctor extends \source\models\User {
    private $crm;
    private $specialty;

    public function __construct(int $id = null, string $name = null, string $email = null, string $crm = null, string $specialty = null) {
        parent::__construct($id, $name, $email);
        $this->crm = $crm;
        $this->specialty = $specialty;
    }

    public function getCrm(): string {
        return $this->crm;
    }

    public function getSpecialty(): string {
        return $this->specialty;
    }

    public function setSpecialty(string $specialty): void{
        $this->specialty = $specialty;
    }
    
    public function setCrm(string $crm): void {
        $this->crm = $crm;
    }

    public function show(): void{
        echo "<br>Médico: #{$this->getId()} - Nome: {$this->getName()} <br>
            Email: {$this->getEmail()} <br>
            CRM: {$this->getCrm()} <br>
            Especialidade: {$this->getSpecialty()} <br>";
    }
}