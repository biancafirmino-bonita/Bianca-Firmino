<?php
$senhaCorreta = "1234";
$senha = "1111";
$tentativas = 0;

while ($tentativas < 3){
    $tentativas++;

    if ($senha == $senhaCorreta) {
        echo "Senha correta! Acesso permitido.";
        break;
    } else {
        echo "Senha incorreta!<br>";
    }
}
