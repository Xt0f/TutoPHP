<?php
$date1 = '2014-01-01';
$date2 = '2019-04-01';

echo $date1."\n";
echo $date2."\n";
echo "{$date1} - {$date2} \n"
$d1 =new DateTime($date1);
$d2 = new DateTime($date2);
// var_dump($d1->diff($d2,true));
$difference = $d1->diff($d2,true);
echo "Il y a {$difference->y} année(s), {$difference->m} mois et {$difference->d} jour(s).\n";
echo "Il y a {$difference->days} jours de différence.\n";



$date = new DateTime();
$date->modify('+1 month');
// var_dump($date);
echo $date->format('d/m/Y')."\n";

$temps1 = strtotime($date1);
$temps2 = strtotime($date2);
$jour = floor(abs($temps1-$temps2)/(24*60*60));

$temps=time();
$temps=strtotime('+1 month', $temps);
echo date('d/m/Y',$temps);

?>