<?php

require_once __DIR__."/Voiture.php";

$voiture1 = new Voiture();

$voiture1->setVitesseMax(150);

echo $voiture1->getVitesseMax();