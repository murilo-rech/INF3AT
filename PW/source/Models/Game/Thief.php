<?php

namespace source\Models\Game;

class Thief extends Character {
    private float $agility;

    public function __construct(string $name = null, float $life = null, float $mana = null, float $strength = null, float $agility = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->agility = $agility;
    }

    public function agility(): float {
        return $this->agility;
    }

    public function setAgility(Float $agility = null): void {
        $this->agility = $agility;
    }
    public function describe(): string {
        return "<br>Name: {$this->getName()} | Life: {$this->getLife()} | Mana: {$this->getMana()} | Strength: {$this->getStrength()} <br> Extras <br> Agility: {$this->agility}<br>";
    }
}