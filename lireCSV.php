<?php
$fichier = __DIR__.DIRECTORY_SEPARATOR.'demo.csv';

// echo file_get_contents($fichier);

// $lines = file($fichier);
// echo $lines[1];

//$resource = fopen($fichier,'r');
//var_dump(fstat($resource));

$resource = fopen($fichier,'r');
var_dump(fgets($resource)); // fgets lis la première ligne et positionne le curseur en début de seconde ligne
var_dump(fgets($resource));
echo fgets($resource);

//$resource = fopen($fichier,'r');
$k=0;
while ($ligne = fgets($resource)) { // assignation dans la boucle, donne faux en fin de fichier
    $k++;
    if ($k == 5) { echo $ligne; break;}
}



//$resource = fopen($fichier,'r');
//echo fstat($resource,2);

fclose($resource);
?>