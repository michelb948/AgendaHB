<?php
session_start();

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = $_POST['senha'];

$cpf = preg_replace('/[^0-9]/', '', $cpf);

if (!isset($cpf, $senha)) {
    die('cpf e/ou senha não podem estar em branco');
}

$con = require 'connection.php';

$sql = 'select * from docentes where cpf = ' . $cpf;

$stmt = $con->query($sql, PDO::FETCH_ASSOC);

$result = $stmt->fetchAll();

if (!count($result) > 0) {
    die('Usuário não encontrado.');
}

$usuario = $result[0];

if (password_verify($senha, $usuario['senha'])) {
    header('location: Menu.php');
} else {
    die('Usuário e/ou senha invalidos.');
}
