<?php

if(isset($_POST['Cadastrar'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $checksenha = $_POST['checksenha'];
    $cpf = $_POST['cpf'];
}
if($senha != $checksenha){
    die("Senhas não correspondem!");
}


$senha = password_hash($senha, PASSWORD_DEFAULT);

$con = require 'connection.php';

if(!$con){
    die("Conexão falhou!" . mysqli_connect_error());
}
$sql = "INSERT INTO docentes(nome, senha, cpf) VALUES('$nome', '$senha', '$cpf')"; 

$rs = mysqli_query($con, $sql);

if($rs){
    echo "Professor(a) cadastrado(a) com sucesso :D !";
}
?> 