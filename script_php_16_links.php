<?php

$csv = "links.csv";
#avec https://www.google.com/ ca marche
$site = file_get_contents('https://www.google.com/');
$data=[];
// var_dump($csv);
preg_match_all('#(https?://)([\w\d.&:\#@%/;$~_?\+\-=]*)#',$site,$matches);
// print_r($matches);

foreach($matches[0] as $key=>$match){
    // echo ;
    // $data += $match."\n";
    array_push($data,$match."\n");
    // foreach($match as $k=>$value){
    //     // file_put_contents($csv,$value);
    //     echo $k.$value."\n";
    //     // echo "\n";
    // }
    // file_put_contents($csv,$match);
    // echo $match[0];
    // echo "\n";
    // echo $k;
    // echo "\n";
    // var_dump($match);
    
}file_put_contents($csv,$data);
