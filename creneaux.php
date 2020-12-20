<?php
function demander_creneau($question = 'Veuillez entrer votre creneau') {
    echo $question."\n";
    while (true) {
        $heure1 = readline('Heure de début : ');
        $heure2 = readline('Heure de fin : ');
        if ($heure1<24 && $heure2<24 && $heure1<$heure2) {
            break;
            } else echo 'Les heures sont comprises entre 0 et 23, l\'heure de début précède l\'heure de fin.'."\n";
    }    
    $creneau=[$heure1,$heure2];
    return $creneau;  
}

$creneau = demander_creneau(); // Demander creneau [8,9]

$creneau2 = demander_creneau('Veuillez entrer votre creneau');

print_r($creneau);
print_r($creneau2);

?>