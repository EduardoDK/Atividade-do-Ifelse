<?php

$altura = $_GET["altura"];
$sexo = $_GET["sexo"];

if($sexo == "masculino"){
   $altura = (72.7*$altura)-58;
   echo  "Peso ideal : ". $altura;
}
else{
    $altura = (62.1 * $altura) - 44.7;
    echo  "Peso ideal : ". $altura;


}