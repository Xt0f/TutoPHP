<?php
var_dump (__DIR__);
echo dirname(__DIR__)."\n";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'PhpTuto' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'MonObjet.php';
$instanceObjet1 = new MonObjet(9,12);
$instanceObjet2 = new MonObjet(14,16);
var_dump($instanceObjet1,$instanceObjet2);
var_dump(
    $instanceObjet1->MaMethode(8),
    $instanceObjet2->MaMethode(15),
    //$instanceObjet1->intersect($instanceObjet2)
);
?>