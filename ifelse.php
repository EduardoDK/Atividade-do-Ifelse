<?php

//Atividade 1

$num1 = 12;
$num2  = 7;

if($num1 > $num2){
    echo $num1;
}
else{
    echo $num2;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 2 </title>
</head>
<body>
    <?php
    $ano_nascimento = $_GET["ano"];


    if($ano_nascimento <= 2001){
        echo "<img src='img/img1.jpg'>";
    }
    else{
        echo "<img src='img/img2.jpg'>";
    }

    ?>

    
</body>
</html>



