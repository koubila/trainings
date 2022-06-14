<?php

#Tp tableaux
$tab = [];
$somme =0;
while ($entry!='q'){
    echo "Entrer un entier svp (taper q pour stopper)\n";
    $entry = trim(fgets(STDIN));
    array_push($tab,$entry);
}
echo "Il y a dans le tableau ",sizeof($tab)-1," valeurs.\n";



for ($i=0; $i<sizeof($tab)-1 ; $i++){
    echo "La valeur du tableau à l'indice $i est: $tab[$i]\n";
    $somme += $tab[$i];
}
echo "\n";
echo "La somme des valeurs est $somme.\n";
echo "Le tableau NON trié est :\n";
print_r($tab);
echo "Le tableau trié est :\n";
asort($tab);
print_r($tab);
foreach ($tab as $key=>$val){
    if($val === "q"){break;}
    echo "$val\n";
}

?>