<?php

class Personnage {
  
    private $x;
    private $y;

  
    public function __construct($x, $y) {
        $this->x = $x; 
        $this->y = $y;  
    }

   
    public function gauche() {
        $this->x--;  
    }

    
    public function droite() {
        $this->x++;  
    }

   
    public function bas() {
        $this->y++;  
    }

   
    public function haut() {
        $this->y--;  
    }

    
    public function position() {
        return "Position actuelle : x = " . $this->x . ", y = " . $this->y;
    }
}

