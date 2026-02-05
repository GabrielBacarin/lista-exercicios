<?php 

    $valor1 = "10"; 
    $valor2 = "6"; 

    if(is_numeric($valor1) && is_numeric($valor2)){
        $soma = $valor1 + $valor2; 
        echo "Resultado: $soma";
    }else{
        echo "Digite um valor válido";
    }

?> 