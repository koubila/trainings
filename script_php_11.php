<?php
#fonctions banque
echo "Bienvenue sur sur application BankWithU\n";
echo "Quel est votre revenu mensuel ? \n";
$revenu = readline();

// echo "A combien s'élève vos charges mensuelles ?\n";
// $charges = readline();
// $charges *= 12;
echo "Combien voulez vous empruntez ?\n";
$emprunt = readline();

$annee = [5,10,15,20,25];

$endette = 0.33;

#calcul capacité d'emprunt
// $capacité = ($revenu - $charges)*$endette;
$capacite = ($revenu)*$endette*12;
echo "mensualité max : ",$capacite/12," euros\n";

for($i=0; $i<sizeof($annee); $i++){
    
    $em = $annee[$i] * $capacite;
    echo "tu peux emprunter $em pour $annee[$i] années de remboursements.\n";
}
if($em>$emprunt){
    echo "désolé tu ne peux faire de crédit";
}
?>