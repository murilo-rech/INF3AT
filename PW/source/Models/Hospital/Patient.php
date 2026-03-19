<?php

namespace source\Models\Hospital;

class Patient extends \source\models\User {

    private $birthDate;
    private $medicalRecord;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, string $birthDate = null, string $medicalRecord = null) {
        parent::__construct($id, $name, $email, $password);
        $this->birthDate = $birthDate;
        $this->medicalRecord = $medicalRecord;
    }

    public function getBirthDate(): string {
        return $this->birthDate;
    }
    public function getMedicalRecord(): string {
        return $this->medicalRecord;
    }
    public function setMedicalRecord(string $medicalRecord): void {
        $this->medicalRecord = $medicalRecord;
    }
    public function setBirthDate(string $birthDate): void {
        $this->birthDate = $birthDate;
    }

    public function show(){
        echo "<br>Paciente: #{$this->getId()} - Nome: {$this->getName()} <br>
            Email: {$this->getEmail()} <br>
            Data de Nascimento: {$this->getBirthDate()} <br>
            Prontuário: {$this->getMedicalRecord()}<br>";
    }
}