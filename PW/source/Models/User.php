<?php

namespace source\Models;

class User
{

    public $id;
    private $name;
    private $email;


    public function __construct(
        int $id,
        string $name = null,
        string $email = null,
        )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = null): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email = null): void
    {
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function show(){
        echo "Usuário: #{$this->id} - Nome: {$this->name} - Email: {$this->email}";
    }
}