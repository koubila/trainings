<?php
$cle = "77ee46c379fcc1190dac3507abd1afa0";
$ville = ['LYON','PARIS','LONDON'];
$ville2 = "LYON";


// $url_api = "http://api.openweathermap.org/data/2.5/weather?q=LYON&appid=".$cle;
// var_dump($url_api);

foreach($ville as $v){
    $url_api = "http://api.openweathermap.org/data/2.5/weather?q=".$v."&appid=".$cle;
    $json = json_decode(file_get_contents($url_api));
    var_dump($json->name);
}


?>