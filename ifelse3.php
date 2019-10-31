<?php

$banana = 0.20;
$numeroBananas = $_GET["numero"];

if($numeroBananas > 6){
    $banana = 0.15;
}
else{
    $banana = 0.20;
}


$numeroBananas = $numeroBananas * $banana;

echo $numeroBananas;

