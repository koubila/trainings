<?php

#Tp tableaux
// - Créer un tableau
// - Lire une entrée clavier en demandant de tapé une valeur numérique en
// boucle jusqu'à ce que le caractère “q” soit tapé
// - Insérer chaque valeur saisie dans le tableau
// - Afficher le nombre de valeur présente dans le tableau
// - Afficher la somme des valeurs du tableau
// - Afficher les valeurs du tableau
// - Trier dans l’ordre croissant les valeurs du tableau
// - Afficher de nouveau les valeurs du tableau
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