<?php

namespace source\Models;

class User {
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id = null) {
        $this->id = $id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name = null) {
        $this->name = $name;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email = null) {
        $this->email = $email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(string $password = null) {
        $this->password = $password;
    }

    public function show() {
        echo "<br> Usuário: #{$this->id} - Nome: {$this->name} - Email: {$this->email}";
    }
}