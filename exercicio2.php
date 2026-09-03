<?php

function verificarIdade($idade)
{
    if ($idade >= 18){
        return "Maior de idade. Pode tirar carta<br><br>";
    } else {
            return "Maior de idade. Só de Uber rs<br><br>";
}
}
echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);