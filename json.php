<?php
$cle = "77ee46c379fcc1190dac3507abd1afa0";
$ville = ['LYON','PARIS','LONDON'];
$csv = "meteo.csv";
$fp = fopen($csv, 'w');
$array = [];

foreach($ville as $v){
    $url_api = "http://api.openweathermap.org/data/2.5/weather?q=".$v."&appid=".$cle;
    $json = json_decode(file_get_contents($url_api));
    // var_dump($json);
    var_dump($json->name, $json->coord->lat, $json->coord->lon, $json->main->humidity, $json->main->temp, $json->main->pressure);
    array_push($array,$json->name);
    // fputcsv(fgetcsv($fp),$json);
   
}

 fputcsv($fp,$array);
?>