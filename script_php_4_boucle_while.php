<?php
// - Lire une entrée clavier en demandant de tapé un salaire compris entre 1500€ et 3000€
// - Réaliser un nombre de tour de boucles relatif au nombre de jours dans un mois (30 ou 31
// comme vous voulez)
// - Pour chaque tour de boucle et donc chaque jour, aléatoirement vous enlèverez une
// somme comprise entre 30€ et 200€, à la fin de chaque jour affiché combien il vous reste
// ainsi que le numéro du jour, ex: “jour n° 25, il me reste 500€”
// - Si vous arrivez à la fin du mois avec de l’argent, vous affichez le texte “Vous économise X€,
// Félicitations !”
// - Si durant le mois vous n’avez plus d’argent, vous affichez le jour durant lequel vous êtes
// arrivez à 0€ , “Mon compte est vide et on est le X ieme jour du mois” et vous arrêtez le script
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