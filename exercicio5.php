<?php

$opcao = 5;

echo '<h1 style="color: #8f72bd;">JOGO</h1><br>';
echo '<h2 style="color: #764576;">PRINCESA E O SAPO 🐸👑</h2><br>';
echo "1 - JOGAR 🕹️<br> | 2 - PERSONAGENS | 3 - RANKING | 4 - CONFIGURAÇÕES | 5 - SAIR";
echo "<br>";

echo "<b> PERSONAGENS 👻: Anelise, Camilla, Mirela, Zadie </b>";
 
switch($opcao) {
    case 1:
        echo "BOM JOGO!.";
        break;
    case 2:
        echo "PERSONAGENS:<br>";
        echo "Zadie<br>";
        echo "Camilla<br>";
        echo "Anelise<br>";
    break;
    case 3:
        echo "Ranking Atual: <br>";
        echo "🏆 Anelise<br>";
        echo "🥈 Mirela <br>";
        echo "🥉 Zadie <br>";
    break;
    case 4:
        echo "Configurações:";
        echo "- Alterar Username <br>";
        echo "- Trocar Personagem <br>";
        echo "- Explorar Vestimentas <br>";
    break;
    case 5:
        echo "Até a Próxima!";
    default:
        echo "Opção inválida!";
}