<?php

namespace source\Models\Course;

class Instructor extends \source\models\User {
    private string $degree;
    private string $bio;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, string $degree = null, string $bio = null) {
        parent::__construct($id, $name, $email, $password);
        $this->degree = $degree;
        $this->bio = $bio;
    }

    public function getDegree(): ?string {
        return $this->degree;
    }

    public function getBio(): ?string {
        return $this->bio;
    }

    public function setDegree(string $degree = null) {
        $this->degree = $degree;
    }
    
    public function setBio(string $bio = null) {
        $this->bio = $bio;
    }

    public function show(): void {
        echo "<br> Instrutor: #{$this->getId()} - Nome: {$this->getName()} <br>
            Email: {$this->getEmail()} <br>
            Formação: {$this->getDegree()} <br>
            Bio: {$this->getBio()} <br>";
    }
}
