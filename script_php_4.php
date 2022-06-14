<?php

echo "TP boucle WHILE\n";
echo "Entrer votre salaire (un entier) entre 1500 et 3000 svp\n";
$sal = trim(fgets(STDIN));
$rest = $sal;
while($sal<1500 || $sal>3000){
    echo "... entre 1500 et 3000 svp\n";
    $sal = trim(fgets(STDIN));
}
for ($i=1; $i<=31; $i++){
    $rand = rand(30,200);
    echo "\nJour n°$i, le montant de votre dépense est $rand euros.\n";
    echo "le compte est à $rest euros.\n";
    

    if ($rest > $rand){
        $rest = $rest - $rand;
        echo "le nouveau solde est $rest après déduction.";
        if($i==31){
        echo "\nDonc Vous avez économisez ce mois ci $rest euros.\n";
        }
    }else{
        echo "Vous n'avez plus assez d'argent ! Nous sommes le jour numero $i.\n";
        echo "Votre compte est à $rest et votre dépense est de $rand.\n";
        echo "Veuillez renflouer votre compte, il vous manque ",$rand-$rest," euros pour cette dépense.\n";
        break; 
    }
}