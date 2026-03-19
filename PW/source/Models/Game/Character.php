<?php

namespace source\Models\Game;

class Character{
    private string $name;
    private float $life;
    private float $mana;
    private float $strength;

    public function __construct(string $name = null, float $life = null, float $mana = null, float $strength = null) {
        $this->name = $name;
        $this->life = $life;
        $this->mana = $mana;
        $this->strength = $strength;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function getLife(): ?float
    {
        return $this->life;
    }
    public function getMana(): ?float
    {
        return $this->mana;
    }
    public function getStrength(): ?float
    {
        return $this->strength;
    }

    public function setName(string $name = null): void{
        $this->name = $name;
    }
    public function setLife(string $life = null): void{
        $this->life = $life;
    }
    public function setMana(string $mana = null): void{
        $this->mana = $mana;
    }
    public function setStrength(string $strength = null): void{
        $this->strength = $strength;
    }

    public function describe(): string {
        return "Name: {$this->name} | Life: {$this->life} | Mana: {$this->mana} | Strength: {$this->strength}<br>";
    }

        
}