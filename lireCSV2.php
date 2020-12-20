<?php
$fichier = __DIR__.DIRECTORY_SEPARATOR.'demo.csv';
$moncsv = file_get_contents($fichier);
$lignes = explode(PHP_EOL,$moncsv);

foreach($lignes as $k => $ligne){
    $doc[$k] = explode(";",$ligne);
    echo $doc[$k];
}


?>