<?php

class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je suis $this->prenom $this->nom.";
    }
}

$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Dupont", "Jean");

echo $personne1->SePresenter() . "<br>";
echo $personne2->SePresenter() . "<br>";

?>
