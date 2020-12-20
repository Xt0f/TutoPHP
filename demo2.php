<?php
/* Exercice réalisé */
$note=(int)readline('Quelle est votre note : ');
if ($note<10){
    echo 'Vous n\'avez pas la moyenne !'."\n";
}elseif ($note==10) {
    echo 'Tout juste la moyenne.'."\n";
}else {
    echo 'Bravo vous avez une bonne note de '.$note."\n";
}
?>