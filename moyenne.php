<?php
$notes=[10,20,13];
array_push($notes,20,20,20); // Travail sur le tableau par référence, fonction mutable
print_r($notes);
$nb_notes=count($notes);
$moyenne=array_sum($notes)/$nb_notes;
print_r(array_reverse($notes)); // fonction non mutable, le tableau ne change pas
print_r($notes);
echo 'La moyenne des notes est de '.round($moyenne,2)."\n";
?>