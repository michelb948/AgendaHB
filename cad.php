<?php
require "conn.php";

if (isset('cpf', 'nome', 'senha')) {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO professores (cpf, nome, senha) VALUES ($cpf, $nome, $senha)";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: main.php");
    }
    else {
        echo "falhou :(, preencheu tudo corretamente?";
    }
}

else {
    echo "Nenhum campo pode estar vazio!";
}
