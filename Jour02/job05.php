<?php

class Voiture {
   
    private string $marque;
    private string $modele;
    private int $annee;
    private int $kilometrage;
    private bool $en_marche = false;
    private int $reservoir = 50;

   
    public function __construct(string $marque, string $modele, int $annee, int $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

   
    public function getMarque(): string {
        return $this->marque;
    }

    public function getModele(): string {
        return $this->modele;
    }

    public function getAnnee(): int {
        return $this->annee;
    }

    public function getKilometrage(): int {
        return $this->kilometrage;
    }

    public function getEnMarche(): bool {
        return $this->en_marche;
    }

    public function getReservoir(): int {
        return $this->reservoir;
    }

   
    public function setMarque(string $marque): void {
        $this->marque = $marque;
    }

    public function setModele(string $modele): void {
        $this->modele = $modele;
    }

    public function setAnnee(int $annee): void {
        $this->annee = $annee;
    }

    public function setKilometrage(int $kilometrage): void {
        $this->kilometrage = $kilometrage;
    }

    public function setReservoir(int $reservoir): void {
        $this->reservoir = $reservoir;
    }

    
    private function verifier_plein(): int {
        return $this->reservoir;
    }

   
    public function demarrer(): void {
        if ($this->verifier_plein() > 5) {
            $this->en_marche = true;
            echo "La voiture démarre.\n";
        } else {
            echo "Impossible de démarrer, réservoir insuffisant.\n";
        }
    }

   
    public function arreter(): void {
        $this->en_marche = false;
        echo "La voiture est arrêtée.\n";
    }
}


$voiture1 = new Voiture("Toyota", "Corolla", 2020, 30000);
$voiture1->demarrer();
$voiture1->arreter();

?>
