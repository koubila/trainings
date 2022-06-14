<?php

$csv = "links.csv";
#avec https://www.google.com/ ca marche
$site = file_get_contents('https://www.google.com/');

// for($i=0; $i<strlen($site); $i++){
//     if($site[$i]=='h'){
//         echo $site[$i];
//     }
// }


// var_dump($csv);
preg_match_all('#(https?://)([\w\d.&:\#@%/;$~_?\+\-=]*)#',$site,$matches);
print_r($matches);
foreach($matches as $k=>$match){
    file_put_contents($csv,$match);
    echo $match[0];
    echo "\n";
    echo $k;
    echo "\n";
    var_dump($match);
    
}
