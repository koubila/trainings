<?php
$cle = "77ee46c379fcc1190dac3507abd1afa0";
$ville = ['LYON','PARIS','LONDON'];
$url_api = "http://api.openweathermap.org/data/2.5/weather?q=".$ville."&appid=".$cle;

foreach($ville as $v){
    $json = file_get_contents($url_api);
    var_dump($json);
}


?>