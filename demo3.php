<?php
$note=readline('Entrez votre note (fin pour terminer) : ');
while ($note!='fin'||$note!='Fin'||$note!='FIN'){
    $notes[]=(int)$note;
    $note=readline('Entrez votre note (fin pour terminer) : ');
}
print_r($notes)
?>