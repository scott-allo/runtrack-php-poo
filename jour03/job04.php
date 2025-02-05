<?php

class Forme {
   
    public function aire(): float {
        return 0;
    }
}


class Rectangle extends Forme {
    private float $largeur;
    private float $hauteur;

  
    public function __construct(float $largeur, float $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

 
    public function aire(): float {
        return $this->largeur * $this->hauteur;
    }
}


$rectangle = new Rectangle(10, 5);


echo "L'aire du rectangle est : " . $rectangle->aire() . "\n"; 
?>
