<?php
var_dump(__DIR__);
$chemin = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'EnqRentree'.DIRECTORY_SEPARATOR.'DSDEN64+-+PAU+Sud+-+Enquete+de+rentree+2___20190808_00-35-25.slk';
$ressource = fopen($chemin,'r');
echo $ressource;
?>
