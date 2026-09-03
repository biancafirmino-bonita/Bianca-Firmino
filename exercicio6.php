<?php

function calcularMedia($nota1, $nota2, $nota3)
{
    return $nota1 + $nota2 + $nota3 / 3;
}

echo "A média do aluno é: ";
echo calcularMedia(10,8,5);