<?php
echo "Bienvenue, sur notre application de calcul de surface.\n";
echo "Entrez la largeur svp :";
$lar = readline();
echo "Entrez la longueur svp :";
$lon = readline();
echo "La superfice est donc de: ";
echo superficie($lar,$lon);
echo "\n";
echo "au revoir";


function superficie(float $a, float $b):float 
{
    return $a*$b;
}




?>