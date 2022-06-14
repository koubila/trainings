<?php
echo "Bienvenue, sur notre application de calcul de surface.\n";
echo "Entrez le nb de pieces svp :\n";
$piece = readline();
$totalSuperficie=0;
$bien=[];
// $bien=[intval($piece)][$x];
var_dump($bien);
#tableau 1 dimension:
// for ($i=0; $i<$piece; $i++){
//     echo "Entrez la largeur de la piece ",$i+1," svp :\n";
//     $lar = readline();
//     echo "Entrez la longueur ",$i+1," svp :\n";
//     $lon = readline();
//     echo "La superfice de la piece ",$i+1," est donc de: \n";
//     array_push($bien,superficie($lar,$lon));
//     echo superficie($lar,$lon)," m²\n";   
// }
// var_dump($bien);

#tableau à 2 dimensions
for($i=0; $i < $piece; $i++){

    for($j=0; $j < 1; $j++){
        echo "Entrez la largeur en mètre de la piece ",$i+1," :\n";
        $lar = readline();
        $bien[$i][$j]=$lar;

        echo "Entrez la longueur en mètre de la piece ",$i+1," :\n";
        $lon = readline();
        $bien[$i][$j+1]=$lon;

        echo "la superficie de la piece ",$i+1," est ",superficie($bien[$i][$j],$bien[$i][$j+1])," m²,\n";

        $totalSuperficie += superficie($bien[$i][$j],$bien[$i][$j+1]);
    }
}
echo "\nLa superficie totale du bien est $totalSuperficie m².\n";


echo "\n";
echo "au revoir";
function superficie(int $a, int $b):int 
{
    return $a*$b;
}




?>