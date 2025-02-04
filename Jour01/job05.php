<?php

class Animal {
    
    private $age;
    private $prenom;

   
    public function __construct() {
        $this->age = 0;        
        $this->prenom = "";    
    }

   
    public function vieillir() {
        $this->age++;  
    }

  
    public function nommer($nom) {
        $this->prenom = $nom; 
    }

 
    public function afficherAge() {
        echo "L'âge de l'animal  " . $this->age . " ans.<br>";
    }

 
    public function afficherPrenom() {
        echo "L'animal se nomme  " . $this->prenom . ".<br>";
    }
}


$monAnimal = new Animal();
$monAnimal->afficherAge();
$monAnimal->vieillir();
$monAnimal->afficherAge();
$monAnimal->nommer("Luna");
$monAnimal->afficherPrenom();

?>
