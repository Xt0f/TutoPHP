<?php
// Caviarde les insultes saisies dans une phrase
$insultes = ['merde','Merde','MERDE','con','Con','CON','connard','Connard','CONNARD','PUTE','pute','Pute','Putain','putain','PUTAIN','Bordel','BORDEL','bordel'];
$phrase = readline('Entrez votre commentaire : ');
foreach($insultes as $insulte){
    $phrase = str_replace($insulte, '***',$phrase);
}
echo $phrase."\n";
?>