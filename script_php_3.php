<?php

echo "hello tt le monde\n";
echo "taper un mot sur votre clavier svp :\n";

$res = readline();
var_dump($res);

   for ($i=0; $i<strlen($res) ; $i++){
    if (!is_numeric($res[$i])){
    echo "Lettre ",$res[$i],"\n";
    }else{
        echo "entrez seulement des lettres svp.\n";
    }
   };
#echo strlen($res);


?>