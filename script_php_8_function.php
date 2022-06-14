<?php

#les fonctions
// - Lire une entrée clavier en demandant un chiffre entre 5 et 20
// - Vous devez créer une fonction “somme” qui prend en paramètres 3 nombres
// - Vous devez ajouter les trois nombres dans cette fonction
// - Faites un appel à cette fonction dans une boucle correspondant aux nombres
// saisie par l’utilisateur
// - Les valeurs entré lors de l’appel de la fonction somme doivent être aléatoire
// entre 300 et 1000
// - Affiché le résultats lors de chaque tours de boucle
while($nb<5 or $nb>20)
{echo "entrez un nombre entre 5 et 20:\n";
$nb = readline();
}
// echo $nb;

function somme(int $a, int $b, int $c) : int
{
    return $a+$b+$c;
}

for ($i=0; $i<$nb; $i++){
    $somme=somme(rand(300,1000),rand(300,1000),rand(300,1000));
    echo "tour $i ";
    echo $somme;
    echo "\n";
}