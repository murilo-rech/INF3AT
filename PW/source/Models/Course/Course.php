<?php

namespace source\Models\Course;

class Course {
    private int $id;
    private string $title;
    private string $hours;
    private Instructor $instructor;

    public function __construct(int $id = null, string $title = null, string $hours = null, Instructor $instructor = null) {
        $this->id = $id;
        $this->title = $title;
        $this->hours = $hours;
        $this->instructor = $instructor;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function getHours(): ?string {
        return $this->hours;
    }

    public function getInstructor(): ?Instructor {
        return $this->instructor;
    }

    public function setId(int $id = null) {
        $this->id = $id;
    }

    public function setTitle(string $title = null) {
        $this->title = $title;
    }

    public function setHours(string $hours = null) {
        $this->hours = $hours;
    }

    public function setInstructor(Instructor $instructor = null) {
        $this->instructor = $instructor;
    }



    public function show(): void {
        echo "<br> Curso: #{$this->id} - Título: {$this->title} <br>
            Carga Horária: {$this->hours} <br>
            Instrutor: {$this->instructor->getName()} <br>";
    }

}