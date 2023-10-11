<?php
class Voiture
{
    private string $marque;
    private float $vitesseMax;

    public function setVitesseMax(float $vitesse):void
    {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            $this->vitesseMax = 0;
        }
    }
    public function getVitesseMax():float
    {
        return $this->vitesseMax;
    }
}
