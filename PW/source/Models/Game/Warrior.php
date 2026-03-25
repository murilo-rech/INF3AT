<?php

namespace source\Models\Game;

class Warrior extends Character {
    private float $defense;
    public function __construct(string $name = null, float $life = null, float $mana = null, float $strength = null, float $defense = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->defense = $defense;
    }
    public function getDefense(): ?float
    {  
        return $this->defense;
    }
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    public function describe(): string {
        return "<br>Name: {$this->getName()} | Life: {$this->getLife()} | Mana: {$this->getMana()} | Strength: {$this->getStrength()} <br> Extras <br> Defense: {$this->defense}<br>";
    }
}