<?php

class Cercle {
  
    private $rayon;

   
    public function __construct($rayon) {
        $this->rayon = $rayon;  
    }

  
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon; 
    }

  
    public function afficherInfos() {
        echo "Cercle avec un rayon de " . $this->rayon . " unités.<br>";
    }

    
    public function circonference() {
        return 2 * pi() * $this->rayon; 
    }

    
    public function aire() {
        return pi() * pow($this->rayon, 2);  
    }

    
    public function diametre() {
        return 2 * $this->rayon;  
    }
}


$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);


echo "<h3>Informations du Cercle 1 :</h3>";
$cercle1->afficherInfos();
echo "Circonférence : " . $cercle1->circonference() . " unités<br>";
echo "Diamètre : " . $cercle1->diametre() . " unités<br>";
echo "Aire : " . $cercle1->aire() . " unités carrées<br>";


echo "<h3>Informations du Cercle 2 :</h3>";
$cercle2->afficherInfos();
echo "Circonférence : " . $cercle2->circonference() . " unités<br>";
echo "Diamètre : " . $cercle2->diametre() . " unités<br>";
echo "Aire : " . $cercle2->aire() . " unités carrées<br>";

?>
