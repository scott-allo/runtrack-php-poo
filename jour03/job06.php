<?php

class Vehicule {
    protected string $marque;
    protected string $modele;
    protected int $annee;
    protected float $prix;

    public function __construct(string $marque, string $modele, int $annee, float $prix) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function informationsVehicule(): void {
        echo "Marque : {$this->marque}\n";
        echo "Modèle : {$this->modele}\n";
        echo "Année : {$this->annee}\n";
        echo "Prix : {$this->prix} €\n";
    }

    public function demarrer(): void {
        echo "Attention, je roule !\n";
    }
}


class Voiture extends Vehicule {
    private int $portes = 4;

    public function informationsVehicule(): void {
        parent::informationsVehicule();
        echo "Nombre de portes : {$this->portes}\n";
    }

    public function demarrer(): void {
        echo "La voiture démarre en douceur !\n";
    }
}


class Moto extends Vehicule {
    private int $roues = 2;

    public function informationsVehicule(): void {
        parent::informationsVehicule();
        echo "Nombre de roues : {$this->roues}\n";
    }

    public function demarrer(): void {
        echo "La moto démarre avec puissance !\n";
    }
}


$voiture = new Voiture("Mercedes", "Classe A", 2022, 18500);
echo "Informations sur la voiture :\n";
$voiture->informationsVehicule();
$voiture->demarrer();

echo "\n";


$moto = new Moto("Yamaha", "1200 Vmax", 1987, 4500);
echo "Informations sur la moto :\n";
$moto->informationsVehicule();
$moto->demarrer();
?>
