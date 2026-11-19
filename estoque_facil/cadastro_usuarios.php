<?php

include "config/conexão.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->rowCount() > 0) {
    echo "Erro: este e-mail já está cadastrado.";
} else {
    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES ('$nome', '$email', '$senha')";
    if ($conexao->query($sql)) {
        echo "Usuário cadastrado com sucesso!";
        echo "<br><a href='login.html'>Fazer login</a>";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}