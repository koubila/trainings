<?php

$tab =[];
for ($i=0; $i<30; $i++){
    $rand = rand(20,100);
    array_push($tab,$rand);
}
print_r($tab);
asort($tab);
print_r($tab);