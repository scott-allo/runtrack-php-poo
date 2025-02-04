<?php

abstract class CommandeBase {
    abstract protected function calculerTotal(): float;
}

class Commande extends CommandeBase {
    private int $numeroCommande;
    private array $platsCommandes = [];
    private string $statut;
    private const TVA = 0.2;

    public function __construct(int $numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->statut = "en cours";
    }

    public function ajouterPlat(string $nom, float $prix): void {
        if ($this->statut === "en cours") {
            $this->platsCommandes[] = ["nom" => $nom, "prix" => $prix];
            echo "Plat ajouté: $nom - $prix €\n";
        } else {
            echo "Impossible d'ajouter un plat, la commande est {$this->statut}.\n";
        }
    }

    public function annulerCommande(): void {
        if ($this->statut === "en cours") {
            $this->statut = "annulée";
            $this->platsCommandes = [];
            echo "Commande annulée.\n";
        } else {
            echo "Impossible d'annuler, la commande est déjà {$this->statut}.\n";
        }
    }

    protected function calculerTotal(): float {
        $total = 0;
        foreach ($this->platsCommandes as $plat) {
            $total += $plat["prix"];
        }
        return $total;
    }

    public function afficherCommande(): void {
        echo "Commande #{$this->numeroCommande} - Statut: {$this->statut}\n";
        if (!empty($this->platsCommandes)) {
            foreach ($this->platsCommandes as $plat) {
                echo "- {$plat['nom']}: {$plat['prix']} €\n";
            }
            $total = $this->calculerTotal();
            echo "Total à payer (HT): $total €\n";
            echo "Total à payer (TTC): " . $this->calculerTVA() . " €\n";
        } else {
            echo "Aucun plat commandé.\n";
        }
    }

    public function calculerTVA(): float {
        return round($this->calculerTotal() * (1 + self::TVA), 2);
    }
}


$commande1 = new Commande(101);
$commande1->ajouterPlat("Pizza Margherita", 12.5);
$commande1->ajouterPlat("Salade César", 8.9);
$commande1->afficherCommande();
$commande1->annulerCommande();
$commande1->afficherCommande();

?>
