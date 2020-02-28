<?php


//--->Definir les class en PHP

class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones"); /* sert à instancier un nouveau objet*/
$alex->say_name();

//-------------------------------------------
//-------------------------------------------

//--->Heritage en PHP --->La caractéristique la plus importante de la programmation orientée objet est l'héritage. 
//--->Cette fonctionnalité nous permet de réutiliser le code que nous avons écrit et de l'étendre. 

class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();

class MathStudent extends Student {
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " says that " . $first_number . " + " . $second_number . " is " . $sum;
    }
}

$eric = new MathStudent("Eric", "Chang");
$eric->say_name();
$eric->sum_numbers(3, 5);


// Privé, publique ou preservé? 

//--->public et private --->respectivement pour définir des fonctions accessibles depuis l'extérieur de l'objet ou non.
//Cela permet de mieux définir comment les objets doivent être utilisés, de séparer les fonctions qui sont utilisées pour un usage interne, par opposition à une interface externe.

class Student {
    // constructor should be public
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // for external use
    public function say_name() {
        echo "My name is " . $this->full_name() . "\n";
    }

    // for internal use
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$alex = new Student("Alex", "Jones");

$alex->say_name();

// this will not work
// echo $alex->full_name();

