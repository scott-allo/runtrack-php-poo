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


class Cercle extends Forme {
    private float $radius;


    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    
    public function aire(): float {
        return pi() * pow($this->radius, 2);
    }
}


$rectangle = new Rectangle(10, 5);
echo "L'aire du rectangle est : " . $rectangle->aire() . "\n";


$cercle = new Cercle(7);
echo "L'aire du cercle est : " . $cercle->aire() . "\n";
?>
