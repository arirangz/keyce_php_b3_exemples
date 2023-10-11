<?php


class Vehicule
{
    public string $marque;
    public float $vitesseMax;

    public function avancer()
    {
        echo "Le vehicule avance";
    }
}

class Voiture extends Vehicule {
    private int $roues;
}

class Bateau extends Vehicule {
    private int $nombreCabines;
}


$voiture1 = new Voiture();
$voiture1->avancer();