<?php

namespace source\Models\Math;

class PythagoreanTheorem
{
    private float $cathetusA;
    private float $cathetusB;
    private float $hypotenuse;

    public function __construct(float $cathetusA = null, float $cathetusB = null)
    {
        $this->cathetusA = $cathetusA;
        $this->cathetusB = $cathetusB;
    }

    public function getCathetusA(): ?float
    {
        return $this->cathetusA;
    }

    public function getCathetusB(): ?float
    {
        return $this->cathetusB;
    }

    public function setCathetusA(float $cathetusA = null): ?float
    {
        $this->cathetusA = $cathetusA;
    }


    public function setCathetusB(float $cathetusB = null): ?float
    {
        $this->cathetusB = $cathetusB;
    }

    public function calculate()
    {
        $this->hypotenuse = sqrt($this->cathetusA ** 2 + $this->cathetusB ** 2);
    }

    public function getHypotenuse(): ?float
    {
        return $this->hypotenuse;
    }


    public function show()
    {
        echo "<br>Teorema de Pitágoras (Pythagorean Theorem) <br>
            Cateto a (Cathetus a): {$this->cathetusA} <br>
            Cateto b (Cathetus b): {$this->cathetusB} <br>
            Hipotenusa (Hypotenuse): {$this->hypotenuse} <br>";
    }

}