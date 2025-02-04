<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 1, $nombre2 = 6) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addition() {
        return $this->nombre1 + $this->nombre2;
    }
}

$operation = new Operation();

echo "Nombre1 : $operation->nombre1<br>";
echo "Nombre2 : $operation->nombre2<br>";
echo "Addition : " . $operation->addition() . "<br>";
?>