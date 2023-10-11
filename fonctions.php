<?php



function bonjour(string $prenom, string $nom=''):string|null
{
    return "Bonjour $prenom $nom";
}

echo bonjour("John");