<?php
var_dump(__DIR__);
$chemin = __DIR__.'/demo.txt';
file_put_contents($chemin,'Salut à tous');
file_put_contents($chemin,', oui vraiment à tous.',FILE_APPEND);
file_put_contents($chemin,"\n".' en revenant à la ligne.',FILE_APPEND);
file_put_contents($chemin,"\n  en revenant encore à la ligne.",FILE_APPEND);
echo file_get_contents($chemin);
?>