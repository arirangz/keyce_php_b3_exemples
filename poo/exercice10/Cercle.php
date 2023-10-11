<?php
require_once __DIR__."/Forme.php";

class Cercle extends Forme
{
    protected float $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function calculerSurface()
    {
        return pi()*pow($this->rayon, 2);
    }
}