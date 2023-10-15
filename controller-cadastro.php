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

if(!isset($con)){
    die("Conexão falhou!");
}
$sql = "INSERT INTO professores1(nome, senha, cpf) VALUES(:nome, :senha, :cpf)"; 

$stmt = $con->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':cpf', $cpf);

$rs = $stmt->execute();

if($rs){
    echo "Professor(a) cadastrado(a) com sucesso :D !";
} else {
    echo 'Falha no cadastro';
}
