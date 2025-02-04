<?php

class Livre {
    
    private $titre;
    private $auteur;
    private $nombreDePages;
    private $disponible;

   
    public function __construct($titre, $auteur, $nombreDePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombreDePages($nombreDePages);
        $this->disponible = true; 
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

    public function getDisponible() {
        return $this->disponible;
    }

    
    public function verification() {
        return $this->disponible ? true : false;
    }

    
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre '$this->titre' a été emprunté.<br>";
        } else {
            echo "Désolé, le livre '$this->titre' n'est pas disponible.<br>";
        }
    }

    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre '$this->titre' a été rendu et est maintenant disponible.<br>";
        } else {
            echo "Le livre '$this->titre' n'a pas été emprunté, il est déjà disponible.<br>";
        }
    }

    public function afficherInfos() {
        return "Titre : " . $this->getTitre() . "<br>" .
               "Auteur : " . $this->getAuteur() . "<br>" .
               "Nombre de pages : " . $this->getNombreDePages() . "<br>" .
               "Disponible : " . ($this->verification() ? "Oui" : "Non") . "<br>";
    }
}


$livre1 = new Livre("Harry Potter", "Scott Allo", 1500);


echo "<h3>Informations initiales du livre :</h3>";
echo $livre1->afficherInfos();

$livre1->emprunter(); 


echo "<h3>Informations après emprunt :</h3>";
echo $livre1->afficherInfos();


$livre1->rendre(); 


echo "<h3>Informations après avoir rendu le livre :</h3>";
echo $livre1->afficherInfos();

$livre1->rendre(); 
?>
