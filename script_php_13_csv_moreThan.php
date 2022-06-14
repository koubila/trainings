<?php
$file="/Users/admin/Documents/php_exercices/trainings/ExerciceCSVScript - dataJun-28-2021.csv";
$file2 = "moreThan5000.csv";

$fp = fopen($file, 'r');
$fp2 = fopen($file2, 'w');
$salary=[];

while (($data = fgetcsv($fp)) !== FALSE) {
    
    if($data[4]>5000){
        // echo " data : " . $data[4];
        array_push($salary,$data[4]);
    }
}

fputcsv($fp2, $salary);
fclose($fp);
fclose($fp2);