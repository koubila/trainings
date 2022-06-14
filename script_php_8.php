<?php

#les fonctions
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