<?php

class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        return "($this->x, $this->y)";
    }

    public function afficherX() {
        return $this->x;
    }

    public function afficherY() {
        return $this->y;
    }

    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

$point = new Point(2, 5);
echo $point->afficherLesPoints() . "<br>";
$point->changerX(10);
$point->changerY(15);
echo $point->afficherLesPoints() . "<br>";

?>
