<?php
// - Créer un tableau
// - Inserer 30 nombres dans le tableau de manière aléatoire (compris entre 20 et
// 100)
// - Afficher les valeurs du tableau
// - Trier dans l’ordre croissant les valeurs du tableau
// - Afficher de nouveau les valeurs du tableau
// - Trier dans l’ordre décroissant les valeurs du tableau
// - Afficher de nouveau les valeurs du tableau
$tab =[];
for ($i=0; $i<30; $i++){
    $rand = rand(20,100);
    array_push($tab,$rand);
}
print_r($tab);
asort($tab);
print_r($tab);