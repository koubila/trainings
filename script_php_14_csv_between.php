<?php
// ouvir le exercicecsvscript 
// créer betweencsv
// ecrire uniquement nom prenom des employee qui ont entre 30 et 50 ans
$file="/Users/admin/Documents/php_exercices/trainings/ExerciceCSVScript - dataJun-28-2021.csv";
$file2 = "between30and50.csv";

$fp = fopen($file, 'r');
$fp2 = fopen($file2, 'w');
$employee=[];

while (($data = fgetcsv($fp)) !== FALSE) {
    
    if($data[2]>30 and $data[2]<50){
        echo " data : " . $data[2];
        array_push($employee,$data[0]);
        array_push($employee,$data[1]);
        // array_push($employee,$data[2]);
        array_push($employee,";");
    }
}

fputcsv($fp2, $employee);
fclose($fp);
fclose($fp2);