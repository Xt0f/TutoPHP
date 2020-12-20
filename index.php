<?php
require 'stickyHeader.php';
$fichier = __DIR__.DIRECTORY_SEPARATOR.'demo.csv';
$moncsv = file_get_contents($fichier);
$lignes = explode(PHP_EOL,$moncsv);
foreach ($lignes as $ligne){
    echo $ligne;
    $champs = explode(";",$ligne);
    for ($i=0;$i<count($champs);$i++) {
        echo $champs[$i]."\n";
    }
}
/* foreach($lignes as $k => $ligne){
    $champs[$k] = explode(";",$ligne);
    echo $champs[$k]."\n";
}*/

require 'stickyFooter.php';
?>