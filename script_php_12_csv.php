<?php
// créer un script qui génère un file csv
// remplir avec 10 colonne et 100 lignes
// chaque cellule comporte une val aleatoire
$array=[];
for($i=0; $i < 100; $i++){
    for($j=0; $j < 10; $j++){
        $array[$i][$j]=rand();
    }
}
 
$fp = fopen('file.csv', 'w');
 
foreach ($array as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);