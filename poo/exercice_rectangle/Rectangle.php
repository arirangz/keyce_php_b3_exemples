<?php
class Rectangle
{
    public float $longeur;
    public float $largeur;
    public string $couleur;

    public function __construct($longeur, $largeur, $couleur)
    {
        $this->longeur = $longeur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;
    }

    public function calculerSurface()
    {
        return $this->largeur * $this->longeur;
    }

    
}