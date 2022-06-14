<?php
#les fonctions
// Demander à l’utilisateur de saisir un nombre entre 5 et 20
// - Créer une fonction qui créer un tableau et le rempli aléatoirement de 50
// valeurs
// - Créer une autre fonction qui fait la somme de toutes les valeurs du tableau
// envoyé en paramètre
// - Faites appel à ces deux fonction à chaque tour de boucles relatif au nombre
// saisi par l’utilisateur
// - Pour chaque tour afficher la somme du tableau courant
do
{echo "entrez un nombre entre 5 et 20:\n";
$nb = readline();
}while($nb<5 or $nb>20);

function createArray(){
    $tab = [];
    for ($i=0; $i<50; $i++){
        array_push($tab,rand(1,5));
        // var_dump ($tab);
    }
    return $tab;
}

// $tab=createArray();
// var_dump($tab);

function arraySum(array $tab){
    $total=0;
    for ($i=0; $i<sizeof($tab); $i++){
        $total += $tab[$i];
    }
    return $total;
}

// $test = arraySum(createArray());
// var_dump($test);

for ($i=0; $i<$nb; $i++){
    // $array = createArray();
    // var_dump($array);
    // $sum = arraySum($array);
    // echo "la somme de array est $sum\n";
    $test = arraySum(createArray());
    echo "tour $i le total est $test\n";
}