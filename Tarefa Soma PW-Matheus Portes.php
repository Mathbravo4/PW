<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "SOMA";
    echo "<br>";
    
    function soma($valor1, $valor2){
        $resultado  = $valor1 + $valor2;
        return $resultado;
    }
    
    $valor =  soma(745,437);
    echo $valor;

    echo "<hr>";


    echo "SUBTRAÇÃO";
    echo "<br>";
    
    function subtracao($valor1, $valor2){
        $resultado  = $valor1 - $valor2;
        return $resultado;
    }
    
    $valor =  subtracao(84,67);
    echo $valor;

    echo "<hr>";
    

    echo "DIVISÃO";
    echo "<br>";
    
    function divisao($valor1, $valor2){
        $resultado  = $valor1 / $valor2;
        return $resultado;
    }
    
    $valor =  divisao(1765,5);
    echo $valor;

    echo "<hr>";

    echo "MULTIPLICAÇÃO";
    echo "<br>";
    
    function multiplicacao($valor1, $valor2){
        $resultado  = $valor1 * $valor2;
        return $resultado;
    }
    
    $valor =  multiplicacao(794, 200);
    echo $valor;

?>    
</body>
</html>