<?php

class Rectangle {
    
    private $longueur;
    private $largeur;

   
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;  
        $this->largeur = $largeur;    
    }

  
    public function getLongueur() {
        return $this->longueur;  
    }

  
    public function setLongueur($longueur) {
        $this->longueur = $longueur;  
    }

   
    public function getLargeur() {
        return $this->largeur;  
    }

    
    public function setLargeur($largeur) {
        $this->largeur = $largeur;  
    }

  
    public function afficherInfos() {
        return "Longueur: " . $this->getLongueur() . " unités, Largeur: " . $this->getLargeur() . " unités";
    }
}


$rectangle = new Rectangle(10, 5);


echo "<h3>Informations initiales du rectangle :</h3>";
echo $rectangle->afficherInfos() . "<br>";

+
$rectangle->setLongueur(12);  
$rectangle->setLargeur(7);    


echo "<h3>Informations après modification du rectangle :</h3>";
echo $rectangle->afficherInfos() . "<br>";

?>
