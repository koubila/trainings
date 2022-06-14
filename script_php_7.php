<?php

$tab =[];
for ($i=0; $i<30; $i++){
    $rand = rand(20,100);
    array_push($tab,$rand);
}




print_r($tab);
array_multisort($tab);
print_r($tab);
foreach ($tab as $key=>$val){
    echo "$val\n";
    echo "$key\n";
    if ($key%2==0){
        unset($tab[$key]);
    }
}
print_r($tab);
$tab[31]=0;
$tab[32]=10;
$tab[33]=100;

print_r($tab);