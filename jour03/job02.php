<?php

class Personne {
    protected int $age = 14; 

    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.\n";
    }

    public function bonjour() {
        echo "Hello\n";
    }

    public function modifierAge(int $nouvelAge) {
        $this->age = $nouvelAge;
    }
}


class Eleve extends Personne {
    public function allerEnCours() {
        echo "Je vais en cours\n";
    }

    public function afficherAge() {
        echo "J’ai " . $this->age . " ans.\n";
    }
}


class Professeur extends Personne {
    private string $matiereEnseignee;

    public function __construct(string $matiere) {
        $this->matiereEnseignee = $matiere;
    }

    public function enseigner() {
        echo "Le cours va commencer\n";
    }
}


$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCours(); 
$eleve->modifierAge(15); 
$eleve->afficherAge(); 


$professeur = new Professeur("Mathématiques");
$professeur->modifierAge(40); 
$professeur->bonjour();
$professeur->enseigner(); 
?>

