<?php

require_once __DIR__."/Cercle.php";
require_once __DIR__."/Rectangle.php";

$rectangle1 = new Rectangle(10, 5, "jaune");

$cercle1 = new Cercle(5);

echo $cercle1->calculerSurface();