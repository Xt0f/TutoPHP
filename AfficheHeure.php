<?
$t = getdate();
$h = $t['hours'] % 12;
$m = round($t['minutes']/5)*5;
?>
<img src="horloge.php?h=<?=$h?>&m=<?=$m?>" border="0" width="400" height="400" alt=""> 