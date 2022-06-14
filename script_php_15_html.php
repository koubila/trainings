<?php

$html = "site.html";
#avec https://www.google.com/ ca marche
$site = file_get_contents('https://www.qwant.com/?l=fr');
file_put_contents($html,$site);