<?php
$notes = [15,12,18,19,5];
$eleves = [
    'CM2' => 'Faiza',
    'CM1' => 'Dylan',
    'CM1' => 'Caroline',
    'CM2' => 'Quentin'
];
$ecole = [
    'CE2' => ['Pierre','Jean','Jacques'],
    'CE1' => ['Cathy','Jane','Sophie','Madeleine']
];

echo "Liste de copies : \n";
foreach ($notes as $copie) {
    var_dump($copie);

}

echo "Liste des notes : "."\n";
foreach ($notes as $note) {
    echo $note."\n";
}
echo "Incroyable les garçons ne s'affichent pas ! \n";
foreach ($eleves as $classe) {
    echo $classe."\n";
}
echo "Liste des élèves et de leur classe \n";
foreach ($eleves as $niveau => $nom) {
    echo "$nom est en classe de $niveau \n";
}
echo "\n\n\n";

echo "La liste des élèves de l'école par classe de cycle 2 \n";
echo "-----------------------------------------------------\n";
foreach ($ecole as $niveau => $classe) {
    echo "En $niveau il y a ".count($classe)." élèves.\n";
    foreach ($classe as $prenom){
        echo "- $prenom\n";
    }
}

echo "\n\nRevenons aux notes : \n";
echo "---------------------\n\n";
var_dump($note);
echo "La dernière note dans la variable idoine : $note\n";
foreach ($notes as $cle => $note) {
    echo "La note $cle est $note\n";
}

?>