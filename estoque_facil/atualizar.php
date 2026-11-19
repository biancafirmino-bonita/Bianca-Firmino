<?php

include "config/conexão.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["qtd"];

$sql = "UPDATE tb_produtos SET nome = '$nome',categoria = '$categoria', preco = '$preco',qtd = '$quantidade' WHERE id = $id";

if ($conexao->query($sql)){
    echo "✅ Produto atualizado com sucesso!";
} else {
    echo "❌ Erro ao atualizar produto.";
}
echo "<br><a href='listar.php'>Voltar para a lista</a>";
?>