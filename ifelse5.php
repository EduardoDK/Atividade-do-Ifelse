<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crescente</title>
    <style>

    .cor1{
        color:red;
    }
    
    .cor2{
        color:yellow;
    }
    .cor3{
        color:green;
    }



    </style>
</head>
<body>
    <?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    if($n1 < $n2 && $n1< $n3  && $n2 < $n3 ){

        echo "<h1 class='cor1'>$n1</h1>";
        echo "<h1 class='cor2'>$n2</h1>";
        echo "<h1 class='cor3'>$n3</h1>";

    }
    else if($n2 < $n1 && $n2 < $n3 && $n1 < $n3){
        echo "<h1 class='cor1'>$n2</h1>";
        echo "<h1 class='cor2'>$n1</h1>";
        echo "<h1 class='cor3'>$n3</h1>";
    }
    else if($n3 < $n2 && $n3 < $n1 && $n2 < $n1){
        echo "<h1 class='cor1'>$n3</h1>";
        echo "<h1 class='cor2'>$n2</h1>";
        echo "<h1 class='cor3'>$n1</h1>";
    }

    else if($n1 < $n2 && $n1< $n3  && $n3 < $n2 ){

        echo "<h1 class='cor1'>$n1</h1>";
        echo "<h1 class='cor2'>$n3</h1>";
        echo "<h1 class='cor3'>$n2</h1>";

    }
    else if($n2 < $n1 && $n2 < $n3 && $n3 < $n1){
        echo "<h1 class='cor1'>$n2</h1>";
        echo "<h1 class='cor2'>$n3</h1>";
        echo "<h1 class='cor3'>$n1</h1>";
    }
    else if($n3 < $n2 && $n3 < $n1 && $n1 < $n2){
        echo "<h1 class='cor1'>$n3</h1>";
        echo "<h1 class='cor2'>$n1</h1>";
        echo "<h1 class='cor3'>$n2</h1>";
    }



    ?>
</body>
</html>