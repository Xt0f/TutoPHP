<?php
$prenom ='Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1+$note2)/2;
echo "$prenom $nom vous avez eu ",($note1+$note2)/2,"\n";
echo "$prenom $nom vous avez eu $moyenne de moyenne.\n";
$notes=[10,20,18,9,8];
echo $notes[1]."\n";
echo $notes[3]."\n";

$eleve = [
    'nom'=> 'Moi',
    'prenom'=>'Christophe',
    'notes'=>[10,20,15]
];
$eleve[]='CM2-A';
echo $eleve[nom]. ' '.$eleve[prenom]."\n";
echo $eleve['notes'][2]."\n";
print_r($eleve);

$classe = [
    [
        'nom'=>'Bond',
        'prenom'=>"James",
        'notes'=>[17,17,18,19]
    ], 
    [   'nom' => 'Riggs',
        'prenom'=>'Diana',
        'notes'=>[18,13,14,15]
    ]
];

echo 'La deuxième élève est '.$classe[1]['prenom'].' '.$classe[1]['nom'].' avec comme dernière note '.$classe[1]['notes'][3]."\n";

if ($classe[1][notes][0]<15){
    echo "Vous n'aurez pas de mention bien.";

} else {
    echo "Votre note est de $classe[1][notes][0]";

}

?>