<?php

class Produit {
   
    private $nom;
    private $prixHT;
    private $TVA;

   
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

   
    public function calculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);  // Formule : Prix TTC = Prix HT * (1 + TVA/100)
    }

   
    public function afficher() {
        return "Nom du produit: " . $this->nom . "<br>" .
               "Prix HT: " . number_format($this->prixHT, 2) . " €<br>" .
               "TVA: " . $this->TVA . "%<br>" .
               "Prix TTC: " . number_format($this->calculerPrixTTC(), 2) . " €<br>";
    }

    
    public function modifierNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

   
    public function modifierPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

   
    public function getNom() {
        return $this->nom;
    }

    
    public function getPrixHT() {
        return $this->prixHT;
    }

    
    public function getTVA() {
        return $this->TVA;
    }

   
    public function getPrixTTC() {
        return $this->calculerPrixTTC();
    }
}


$produit1 = new Produit("Ordinateur", 1000, 20); 



echo "<h3>Informations Produit 1 :</h3>";
echo $produit1->afficher();


$produit1->modifierNom("Ordinateur Portable");
$produit1->modifierPrixHT(1200);



echo "<h3>Informations modifiées Produit 1 :</h3>";
echo $produit1->afficher();

?>
