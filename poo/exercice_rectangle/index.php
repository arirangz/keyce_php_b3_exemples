<?php
require_once __DIR__."/Rectangle.php";

$rectangle1 = new Rectangle(10, 5.5, "jaune");
$surfaceRectangle1 = $rectangle1->calculerSurface();
echo $surfaceRectangle1;


