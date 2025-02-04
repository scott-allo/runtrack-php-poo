<?php

class Student {
    private string $nom;
    private string $prenom;
    private int $numeroEtudiant;
    private int $credits = 0;
    private string $level;

    public function __construct(string $nom, string $prenom, int $numeroEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->level = $this->studentEval();
    }

    public function add_credits(int $credits): void {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval();
        } else {
            echo "Le nombre de crédits doit être supérieur à zéro.\n";
        }
    }

    private function studentEval(): string {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    public function studentInfo(): void {
        echo "Nom : {$this->nom}\n";
        echo "Prénom : {$this->prenom}\n";
        echo "Numéro d'étudiant : {$this->numeroEtudiant}\n";
        echo "Niveau : {$this->level}\n";
    }
}


$etudiant = new Student("Doe", "John", 150);


$etudiant->add_credits(10);
$etudiant->add_credits(10);
$etudiant->add_credits(10);


$etudiant->studentInfo();

?>
