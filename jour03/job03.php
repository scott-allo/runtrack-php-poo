<?php

class Rectangle {
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

   
    public function getLongueur(): float {
        return $this->longueur;
    }

    public function getLargeur(): float {
        return $this->largeur;
    }

  
    public function setLongueur(float $longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur(float $largeur) {
        $this->largeur = $largeur;
    }

    public function perimetre(): float {
        return 2 * ($this->longueur + $this->largeur);
    }

    
    public function surface(): float {
        return $this->longueur * $this->largeur;
    }
}


class Parallelepipede extends Rectangle {
    private float $hauteur;

    
    public function __construct(float $longueur, float $largeur, float $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

   
    public function getHauteur(): float {
        return $this->hauteur;
    }

  
    public function setHauteur(float $hauteur) {
        $this->hauteur = $hauteur;
    }

   
    public function volume(): float {
        return $this->surface() * $this->hauteur;
    }
}


$rectangle = new Rectangle(5, 2);
echo "Périmètre du rectangle : " . $rectangle->perimetre() . "\n"; 
echo "Surface du rectangle : " . $rectangle->surface() . "\n"; 


$parallelepipede = new Parallelepipede(5, 2, 5);
echo "Volume du parallélépipède : " . $parallelepipede->volume() . "\n"; 
?>
