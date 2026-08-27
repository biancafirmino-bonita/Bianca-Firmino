<?php

$peso = "80";
$altura = "1.79";
$imc = $peso / $altura * $altura;

if($imc > 19 && $imc < 24){
    echo "Você esta com o peso ideal!!!";
}
elseif($imc > 25 && $imc < 29){
    echo "Você esta com sobrepeso!";
}
elseif($imc > 30 && $imc < 34){
    echo "Você esta com obesidade tipo 1";
}
elseif($imc > 35 && $imc < 39){
    echo "Você esta com obesidade tipo 2";
}
elseif($imc > 40){
    echo "Você esta com obesidade tipo 3";
}

