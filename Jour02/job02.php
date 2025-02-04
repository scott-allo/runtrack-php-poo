<?php

class Livre {
 
    private $titre;
    private $auteur;
    private $nombreDePages;

    public function __construct($titre, $auteur, $nombreDePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        
        $this->setNombreDePages($nombreDePages);
    }

  
    public function getTitre() {
        return $this->titre;
    }

   
    public function setTitre($titre) {
        $this->titre = $titre;
    }

   
    public function getAuteur() {
        return $this->auteur;
    }

   
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    
    public function getNombreDePages() {
        return $this->nombreDePages;
    }

    
    public function setNombreDePages($nombreDePages) {
        if (is_int($nombreDePages) && $nombreDePages > 0) {
            $this->nombreDePages = $nombreDePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }

   
    public function afficherInfos() {
        return "Titre : " . $this->getTitre() . "<br>" .
               "Auteur : " . $this->getAuteur() . "<br>" .
               "Nombre de pages : " . $this->getNombreDePages() . "<br>";
    }
}


$livre1 = new Livre("Harry Potter", "Allo Scott", 1500);


echo "<h3>Informations initiales du livre :</h3>";
echo $livre1->afficherInfos();


$livre1->setTitre("Harry potter 2");
$livre1->setAuteur("Allo Scott - Edition 2025");


echo "<h3>Informations après modification :</h3>";
echo $livre1->afficherInfos();


$livre1->setNombreDePages(1600); 
echo "<h3>Informations après modification du nombre de pages :</h3>";
echo $livre1->afficherInfos();


$livre1->setNombreDePages(-50);  
echo "<h3>Informations après tentative de modification invalide :</h3>";
echo $livre1->afficherInfos();

?>
