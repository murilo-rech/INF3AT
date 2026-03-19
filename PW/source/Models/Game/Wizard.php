<?php

namespace source\Models\Game;

class Wizard extends Character {
    private float $intelligence;
    public function __construct(string $name = null, float $life = null, float $mana = null, float $strength = null, float $intelligence = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->intelligence = $intelligence;
    }
    public function getIntelligence(): ?float
    {  
        return $this->intelligence;
    }
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
    }

    public function describe(): string {
        return "<br>Name: {$this->getName()} | Life: {$this->getLife()} | Mana: {$this->getMana()} | Strength: {$this->getStrength()} <br> Extras <br> Intelligence: {$this->intelligence}<br>";
    }
}