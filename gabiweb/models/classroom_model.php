<?php

enum Grade {
    case EF_1;
    case EF_2;
    case EF_3;
    case EF_4;
    case EF_5;
    case EF_6;
    case EF_7;
    case EF_8;
    case EF_9;
    case EM_1;
    case EM_2;
    case EM_3;
    case ET_1;
    case ET_2;
    case ET_3;
    case ET_4;
}

class ClassroomModel {
    private $name;
    private $year;
    private $grade;

    public function __construct($name, $year, Grade $grade) {
        $this->name = $name;
        $this->year = $year;
        $this->grade = $grade;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getGrade(): Grade {
        return $this->grade;
    }

    public function setGrade(Grade $grade) {
        $this->grade = $grade;
    }
}



?>